<?php

namespace FileManagerBundle\Controller;

use FileManagerBundle\Event\FileManagerEvents;
use FileManagerBundle\Helpers\File;
use FileManagerBundle\Helpers\FileManager;
use FileManagerBundle\Helpers\UploadHandler;
use FileManagerBundle\Twig\OrderExtension;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\NotBlank;
//use RedjanYm\FCMBundle\FCMClient;
use FcmBundle\FCMClient;
use sngrl\PhpFirebaseCloudMessaging\Client;
use FileManagerBundle\Entity\DownloadFileCounter;
/**
 * @author Arthur Gribet <a.gribet@gmail.com>
 */
class ManagerController extends Controller
{
    /**
     * @var FileManager
     */
    protected $fileManager;

    /**
     * @Route("/admin/tools/", name="file_manager")
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function indexAction(Request $request)
    {
        $queryParameters = $request->query->all();
        $translator = $this->get('translator');
        $isJson = $request->get('json') ? true : false;
        if ($isJson) {
            unset($queryParameters['json']);
        }
        $fileManager = $this->newFileManager($queryParameters);

        // Folder search
        $directoriesArbo = $this->retrieveSubDirectories($fileManager, $fileManager->getDirName(), DIRECTORY_SEPARATOR, $fileManager->getBaseName());

        // File search
        $finderFiles = new Finder();
        $finderFiles->in($fileManager->getCurrentPath())->depth(0);
        $regex = $fileManager->getRegex();

        $orderBy = $fileManager->getQueryParameter('orderby');
        $orderDESC = OrderExtension::DESC === $fileManager->getQueryParameter('order');
        if (!$orderBy) {
            $finderFiles->sortByType();
        }

        switch ($orderBy) {
            case 'name':
                $finderFiles->sort(function (SplFileInfo $a, SplFileInfo $b) {
                    return strcmp(strtolower($b->getFilename()), strtolower($a->getFilename()));
                });
                break;
            case 'date':
                $finderFiles->sortByModifiedTime();
                break;
            case 'size':
                $finderFiles->sort(function (\SplFileInfo $a, \SplFileInfo $b) {
                    return $a->getSize() - $b->getSize();
                });
                break;
        }

        if ($fileManager->getTree()) {
            $finderFiles->files()->name($regex)->filter(function (SplFileInfo $file) {
                return $file->isReadable();
            });
        } else {
            $finderFiles->filter(function (SplFileInfo $file) use ($regex) {
                if ('file' === $file->getType()) {
                    if (preg_match($regex, $file->getFilename())) {
                        return $file->isReadable();
                    }

                    return false;
                }

                return $file->isReadable();
            });
        }

        $formDelete = $this->createDeleteForm()->createView();
        $fileArray = [];
        foreach ($finderFiles as $file) {
            $fileArray[] = new File($file, $this->get('translator'), $this->get('file_type_service'), $fileManager);
        }

        if ('dimension' === $orderBy) {
            usort($fileArray, function (File $a, File $b) {
                $aDimension = $a->getDimension();
                $bDimension = $b->getDimension();
                if ($aDimension && !$bDimension) {
                    return 1;
                }

                if (!$aDimension && $bDimension) {
                    return -1;
                }

                if (!$aDimension && !$bDimension) {
                    return 0;
                }

                return ($aDimension[0] * $aDimension[1]) - ($bDimension[0] * $bDimension[1]);
            });
        }

        if ($orderDESC) {
            $fileArray = array_reverse($fileArray);
        }

        $parameters = [
            'fileManager' => $fileManager,
            'fileArray' => $fileArray,
            'formDelete' => $formDelete,
        ];

        if ($isJson) {
            $fileList = $this->renderView('@FileManager/views/_manager_view.html.twig', $parameters);

            return new JsonResponse(['data' => $fileList, 'badge' => $finderFiles->count(), 'treeData' => $directoriesArbo]);
        }
        $parameters['treeData'] = json_encode($directoriesArbo);

        $form = $this->get('form.factory')->createNamedBuilder('rename', FormType::class)
            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => false,
                'data' => $translator->trans('input.default'),
            ])
            ->add('send', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                ],
                'label' => $translator->trans('button.save'),
            ])
            ->getForm();

        /* @var Form $form */
        $form->handleRequest($request);
        /** @var Form $formRename */
        $formRename = $this->createRenameForm();

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $fs = new Filesystem();
            $directory = $directorytmp = $fileManager->getCurrentPath().DIRECTORY_SEPARATOR.$data['name'];
            $i = 1;

            while ($fs->exists($directorytmp)) {
                $directorytmp = "{$directory} ({$i})";
                ++$i;
            }
            $directory = $directorytmp;

            try {
                $fs->mkdir($directory);
                $this->addFlash('success', $translator->trans('folder.add.success'));
            } catch (IOExceptionInterface $e) {
                $this->addFlash('danger', $translator->trans('folder.add.danger', ['%message%' => $data['name']]));
            }

            return $this->redirectToRoute('file_manager', $fileManager->getQueryParameters());
        }
        $parameters['form'] = $form->createView();
        $parameters['formRename'] = $formRename->createView();

        return $this->render('@FileManager/manager.html.twig', $parameters);
    }



    /**
     * @Route("/front_file_manager", name="file_manager2",
     *      options={"sitemap" = {"priority" = 0.6, "changefreq" = "weekly" }})
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function index2Action(Request $request)
    {
        $queryParameters = $request->query->all();
        $translator = $this->get('translator');
        $isJson = $request->get('json') ? true : false;
        if ($isJson) {
            unset($queryParameters['json']);
        }
        $fileManager = $this->newFileManager($queryParameters);

        // Folder search
        $directoriesArbo = $this->retrieveSubDirectories2($fileManager, $fileManager->getDirName(), DIRECTORY_SEPARATOR, $fileManager->getBaseName());

        // File search
        $finderFiles = new Finder();
        $finderFiles->in($fileManager->getCurrentPath())->depth(0);
        $regex = $fileManager->getRegex();

        $orderBy = $fileManager->getQueryParameter('orderby');
        $orderDESC = OrderExtension::DESC === $fileManager->getQueryParameter('order');
        if (!$orderBy) {
            $finderFiles->sortByType();
        }

        switch ($orderBy) {
            case 'name':
                $finderFiles->sort(function (SplFileInfo $a, SplFileInfo $b) {
                    return strcmp(strtolower($b->getFilename()), strtolower($a->getFilename()));
                });
                break;
            case 'date':
                $finderFiles->sortByModifiedTime();
                break;
            case 'size':
                $finderFiles->sort(function (\SplFileInfo $a, \SplFileInfo $b) {
                    return $a->getSize() - $b->getSize();
                });
                break;
        }

        if ($fileManager->getTree()) {
            $finderFiles->files()->name($regex)->filter(function (SplFileInfo $file) {
                return $file->isReadable();
            });
        } else {
            $finderFiles->filter(function (SplFileInfo $file) use ($regex) {
                if ('file' === $file->getType()) {
                    if (preg_match($regex, $file->getFilename())) {
                        return $file->isReadable();
                    }

                    return false;
                }

                return $file->isReadable();
            });
        }

        $formDelete = $this->createDeleteForm()->createView();
        $fileArray = [];
        foreach ($finderFiles as $file) {
            $fileArray[] = new File($file, $this->get('translator'), $this->get('file_type_service'), $fileManager);
        }

        if ('dimension' === $orderBy) {
            usort($fileArray, function (File $a, File $b) {
                $aDimension = $a->getDimension();
                $bDimension = $b->getDimension();
                if ($aDimension && !$bDimension) {
                    return 1;
                }

                if (!$aDimension && $bDimension) {
                    return -1;
                }

                if (!$aDimension && !$bDimension) {
                    return 0;
                }

                return ($aDimension[0] * $aDimension[1]) - ($bDimension[0] * $bDimension[1]);
            });
        }

        if ($orderDESC) {
            $fileArray = array_reverse($fileArray);
        }

        $parameters = [
            'fileManager' => $fileManager,
            'fileArray' => $fileArray,
            'formDelete' => $formDelete,
        ];

        if ($isJson) {
            $fileList = $this->renderView('@FileManager/views/_manager_view.html.twig', $parameters);

            return new JsonResponse(['data' => $fileList, 'badge' => $finderFiles->count(), 'treeData' => $directoriesArbo]);
        }
        $parameters['treeData'] = json_encode($directoriesArbo);

        $form = $this->get('form.factory')->createNamedBuilder('rename', FormType::class)
            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => false,
                'data' => $translator->trans('input.default'),
            ])
            ->add('send', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                ],
                'label' => $translator->trans('button.save'),
            ])
            ->getForm();

        /* @var Form $form */
        $form->handleRequest($request);
        /** @var Form $formRename */
        $formRename = $this->createRenameForm();

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $fs = new Filesystem();
            $directory = $directorytmp = $fileManager->getCurrentPath().DIRECTORY_SEPARATOR.$data['name'];
            $i = 1;

            while ($fs->exists($directorytmp)) {
                $directorytmp = "{$directory} ({$i})";
                ++$i;
            }
            $directory = $directorytmp;

            try {
                $fs->mkdir($directory);
                $this->addFlash('success', $translator->trans('folder.add.success'));
            } catch (IOExceptionInterface $e) {
                $this->addFlash('danger', $translator->trans('folder.add.danger', ['%message%' => $data['name']]));
            }

            return $this->redirectToRoute('file_manager2', $fileManager->getQueryParameters());
        }
        $parameters['form'] = $form->createView();
        $parameters['formRename'] = $formRename->createView();

        return $this->render('@FileManager/manager2.html.twig', $parameters);
    }

    /**
     * @Route("/rename/{fileName}", name="file_manager_rename")
     *
     * @param Request $request
     * @param $fileName
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @throws \Exception
     */
    public function renameFileAction(Request $request, $fileName)
    {
        $translator = $this->get('translator');
        $queryParameters = $request->query->all();
        $formRename = $this->createRenameForm();
        /* @var Form $formRename */
        $formRename->handleRequest($request);
        if ($formRename->isSubmitted() && $formRename->isValid()) {
            $data = $formRename->getData();
            $extension = $data['extension'] ? '.'.$data['extension'] : '';
            $newfileName = $data['name'].$extension;
            if ($newfileName !== $fileName && isset($data['name'])) {
                $fileManager = $this->newFileManager($queryParameters);
                $NewfilePath = $fileManager->getCurrentPath().DIRECTORY_SEPARATOR.$newfileName;
                $OldfilePath = realpath($fileManager->getCurrentPath().DIRECTORY_SEPARATOR.$fileName);
                if (0 !== strpos($NewfilePath, $fileManager->getCurrentPath())) {
                    $this->addFlash('danger', $translator->trans('file.renamed.unauthorized'));
                } else {
                    $fs = new Filesystem();
                    try {
                        $fs->rename($OldfilePath, $NewfilePath);
                        $this->addFlash('success', $translator->trans('file.renamed.success'));
                        //File has been renamed successfully
                    
                        $em = $this->getDoctrine()->getManager();
                        $queryBuilder = $em->createQueryBuilder();
                        $queryBuilder->update(DownloadFileCounter::class, 'u')
                        ->set('u.filepath', ':filepath')
                        ->set('u.filename', ':filename')
                        ->where('u.filename = :filename2')
                        ->setParameter('filepath',$NewfilePath)
                        ->setParameter('filename', $newfileName)
                        ->setParameter('filename2', $fileName);
                        $query = $queryBuilder->getQuery();

                        $query->execute();
                        $em->flush();

                    } catch (IOException $exception) {
                        $this->addFlash('danger', $translator->trans('file.renamed.danger'));
                    }
                }
            } else {
                $this->addFlash('warning', $translator->trans('file.renamed.nochanged'));
            }
        }

        return $this->redirectToRoute('file_manager', $queryParameters);
    }

    /**
     * @Route("/upload/", name="file_manager_upload")
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function uploadFileAction(Request $request)
    {
        $fileManager = $this->newFileManager($request->query->all());

        $options = [
            'upload_dir' => $fileManager->getCurrentPath().DIRECTORY_SEPARATOR,
            'upload_url' => $fileManager->getImagePath(),
            'accept_file_types' => $fileManager->getRegex(),
            'print_response' => false,
        ];
        if (isset($fileManager->getConfiguration()['upload'])) {
            $options += $fileManager->getConfiguration()['upload'];
        }

        $this->dispatch(FileManagerEvents::PRE_UPDATE, ['options' => &$options]);

        $uploadHandler = new UploadHandler($options);
        $response = $uploadHandler->response;

        foreach ($response['files'] as $file) {
            if (isset($file->error)) {
                $file->error = $this->get('translator')->trans($file->error);
            }

            if (!$fileManager->getImagePath()) {
                $file->url = $this->generateUrl('file_manager_file', array_merge($fileManager->getQueryParameters(), ['fileName' => $file->url]));
            }
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $filename=explode('/',$file->url);
        $count_elt=count($filename);
        $em = $this->getDoctrine()->getManager();

        $download_counter = new DownloadFileCounter();

        $download_counter->setFilename($filename[$count_elt-1]);
        $download_counter->setFilepath('https://symfony-easyadmin-heroku.herokuapp.com'.$file->url);
        $download_counter->setDownloadCounter(0);
        $download_counter->setOwner($user);

        $em->persist($download_counter);

        // Ecriture dans la base de données
        $em->flush();

        
        $this->dispatch(FileManagerEvents::POST_UPDATE, ['response' => &$response]);

        return new JsonResponse($response);
    }


    /**
     * @Route("/file/{fileName}", name="file_manager_file")
     *
     * @param Request $request
     * @param $fileName
     *
     * @return BinaryFileResponse
     *
     * @throws \Exception
     */
    public function binaryFileResponseAction(Request $request, $fileName)
    {       
        $client= new Client();
        $client->setApiKey('AIzaSyDz99I-m4VDKvM3P9l8wo5QieBxzwlu1hQ');
        $fcmClient = new FCMClient($client);
   
        $em = $this->getDoctrine()->getManager();
        $repository_file_counter_infos = $this->getDoctrine()->getRepository('FileManagerBundle:DownloadFileCounter')->findOneBy(['filename' => $fileName]);
        $repository_file_counter_infos_count = $this->getDoctrine()->getRepository('FileManagerBundle:DownloadFileCounter');
         
        $qb = $repository_file_counter_infos_count->createQueryBuilder('u')
        ->where('u.filename=:filename')
        ->setParameter('filename', $fileName);
        $file_count = $qb->getQuery()->getResult();
        $file_count = count($file_count);
          
        if($file_count==1)
            {
                $pseudo=$repository_file_counter_infos->getOwner();
                $repository_fos_user_infos = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['username' => ''.$pseudo.'']);

                //$id_membre=$repository_fos_user_infos->getId();
                $repository_gcm_user_infos = $this->getDoctrine()->getRepository('AppBundle:GcmUser')->findOneBy(['username' => ''.$pseudo.'']);

                $counter_download = $repository_file_counter_infos->getDownloadCounter()+1;
                $repository_file_counter_infos->setDownloadCounter($counter_download);
                $em->persist($repository_file_counter_infos);
                // Ecriture dans la base de données
                $em->flush();

                if($repository_gcm_user_infos->getEnabled())
                {
                    $token=$repository_gcm_user_infos->getToken();
                    $notification=$fcmClient->createDeviceNotification('File Manager Notification!','Vous venez de recevoir un téléchargement de votre fichier:'.$fileName.'('.$counter_download.' au total)',$token);
                    $fcmClient->sendNotification($notification);
                }
    
            }
            else
            {
                  $notification=$fcmClient->createDeviceNotification('File Manager Notification!','Vous venez de recevoir un téléchargement de votre fichier:'.$fileName,'ficEPkFtubo:APA91bHVuVeojcDQUo_T-Nigw3VDr69_J7RZhRaAeSqKoHs3q3KRyeJjNR93in7ualFbucFN-tAu750nGMQnLYFh8KXsPgbdXhL0nPeukCvobltorNk9mhAeTfuAgK933Wu8LTn1u2Pp');
                  $fcmClient->sendNotification($notification);
            }


        $fileManager = $this->newFileManager($request->query->all());

        return new BinaryFileResponse($fileManager->getCurrentPath().DIRECTORY_SEPARATOR.urldecode($fileName));
    }

    /**
     * @Route("/delete/", name="file_manager_delete")
     *
     * @param Request $request
     * @Method("DELETE")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @throws \Exception
     */
    public function deleteAction(Request $request)
    {
        $form = $this->createDeleteForm();
        $form->handleRequest($request);
        $queryParameters = $request->query->all();
        if ($form->isSubmitted() && $form->isValid()) {
            // remove file
            $fileManager = $this->newFileManager($queryParameters);
            $fs = new Filesystem();
            if (isset($queryParameters['delete'])) {
                $is_delete = false;
                foreach ($queryParameters['delete'] as $fileName) {
                    $filePath = realpath($fileManager->getCurrentPath().DIRECTORY_SEPARATOR.$fileName);
                    if (0 !== strpos($filePath, $fileManager->getCurrentPath())) {
                        $this->addFlash('danger', 'file.deleted.danger');
                    } else {
                        $this->dispatch(FileManagerEvents::PRE_DELETE_FILE);
                        try {
                            $fs->remove($filePath);
                            $is_delete = true;
 
                        } catch (IOException $exception) {
                            $this->addFlash('danger', 'file.deleted.unauthorized');
                        }
                        $this->dispatch(FileManagerEvents::POST_DELETE_FILE);
                    }
                }
                if ($is_delete) {
                    $this->addFlash('success', 'file.deleted.success');

                     $rest = substr($filePath, 9); 
                     $em = $this->getDoctrine()->getManager();
                    $qb = $em->createQueryBuilder();
                    $query = $qb->delete('FileManagerBundle:DownloadFileCounter', 's')
                    ->where('s.filepath = :filepath')
                    ->setParameter('filepath','https://symfony-easyadmin-heroku.herokuapp.com/'.$rest)
                    ->getQuery();

                    $query->execute();
                    $em->flush();
                    $em = $this->getDoctrine()->getManager();        
                }
                unset($queryParameters['delete']);
            } else {
                $this->dispatch(FileManagerEvents::PRE_DELETE_FOLDER);
                try {
                    $fs->remove($fileManager->getCurrentPath());
                    $this->addFlash('success', 'folder.deleted.success');
                } catch (IOException $exception) {
                    $this->addFlash('danger', 'folder.deleted.unauthorized');
                }

                $this->dispatch(FileManagerEvents::POST_DELETE_FOLDER);
                $queryParameters['route'] = dirname($fileManager->getCurrentRoute());
                if ($queryParameters['route'] = '/') {
                    unset($queryParameters['route']);
                }

                return $this->redirectToRoute('file_manager', $queryParameters);
            }
        }

        return $this->redirectToRoute('file_manager', $queryParameters);
    }

    /**
     * @return Form|\Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm()
    {
        return $this->createFormBuilder()
            ->setMethod('DELETE')
            ->add('DELETE', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-danger',
                ],
                'label' => 'button.delete.action',
            ])
            ->getForm();
    }

    /**
     * @return mixed
     */
    private function createRenameForm()
    {
        return $this->createFormBuilder()
            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
                'label' => false,
            ])->add('extension', HiddenType::class)
            ->add('send', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                ],
                'label' => 'button.rename.action',
            ])
            ->getForm();
    }

    /**
     * @param FileManager $fileManager
     * @param $path
     * @param string $parent
     * @param bool   $baseFolderName
     *
     * @return array|null
     */
    private function retrieveSubDirectories2(FileManager $fileManager, $path, $parent = DIRECTORY_SEPARATOR, $baseFolderName = false)
    {
        $directories = new Finder();
        $directories->in($path)->ignoreUnreadableDirs()->directories()->depth(0)->sortByType()->filter(function (SplFileInfo $file) {
            return $file->isReadable();
        });

        if ($baseFolderName) {
            $directories->name($baseFolderName);
        }
        $directoriesList = null;

        foreach ($directories as $directory) {
            /** @var SplFileInfo $directory */
            $fileName = $baseFolderName ? '' : $parent.$directory->getFilename();

            $queryParameters = $fileManager->getQueryParameters();
            $queryParameters['route'] = $fileName;
            $queryParametersRoute = $queryParameters;
            unset($queryParametersRoute['route']);

            $filesNumber = $this->retrieveFilesNumber($directory->getPathname(), $fileManager->getRegex());
            $fileSpan = $filesNumber > 0 ? " <span class='label label-default'>{$filesNumber}</span>" : '';

            $directoriesList[] = [
                'text' => $directory->getFilename().$fileSpan,
                'icon' => 'fa fa-folder-o',
                'children' => $this->retrieveSubDirectories2($fileManager, $directory->getPathname(), $fileName.DIRECTORY_SEPARATOR),
                'a_attr' => [
                    'href' => $fileName ? $this->generateUrl('file_manager2', $queryParameters) : $this->generateUrl('file_manager2', $queryParametersRoute),
                ], 'state' => [
                    'selected' => $fileManager->getCurrentRoute() === $fileName,
                    'opened' => true,
                ],
            ];
        }

        return $directoriesList;
    }


     /**
     * @param FileManager $fileManager
     * @param $path
     * @param string $parent
     * @param bool   $baseFolderName
     *
     * @return array|null
     */
    private function retrieveSubDirectories(FileManager $fileManager, $path, $parent = DIRECTORY_SEPARATOR, $baseFolderName = false)
    {
        $directories = new Finder();
        $directories->in($path)->ignoreUnreadableDirs()->directories()->depth(0)->sortByType()->filter(function (SplFileInfo $file) {
            return $file->isReadable();
        });

        if ($baseFolderName) {
            $directories->name($baseFolderName);
        }
        $directoriesList = null;

        foreach ($directories as $directory) {
            /** @var SplFileInfo $directory */
            $fileName = $baseFolderName ? '' : $parent.$directory->getFilename();

            $queryParameters = $fileManager->getQueryParameters();
            $queryParameters['route'] = $fileName;
            $queryParametersRoute = $queryParameters;
            unset($queryParametersRoute['route']);

            $filesNumber = $this->retrieveFilesNumber($directory->getPathname(), $fileManager->getRegex());
            $fileSpan = $filesNumber > 0 ? " <span class='label label-default'>{$filesNumber}</span>" : '';

            $directoriesList[] = [
                'text' => $directory->getFilename().$fileSpan,
                'icon' => 'fa fa-folder-o',
                'children' => $this->retrieveSubDirectories($fileManager, $directory->getPathname(), $fileName.DIRECTORY_SEPARATOR),
                'a_attr' => [
                    'href' => $fileName ? $this->generateUrl('file_manager', $queryParameters) : $this->generateUrl('file_manager', $queryParametersRoute),
                ], 'state' => [
                    'selected' => $fileManager->getCurrentRoute() === $fileName,
                    'opened' => true,
                ],
            ];
        }

        return $directoriesList;
    }

    /**
     * Tree Iterator.
     *
     * @param $path
     * @param $regex
     *
     * @return int
     */
    private function retrieveFilesNumber($path, $regex)
    {
        $files = new Finder();
        $files->in($path)->files()->depth(0)->name($regex);

        return iterator_count($files);
    }

    /*
     * Base Path
     */
    private function getBasePath($queryParameters)
    {
        $conf = $queryParameters['conf'];
        $managerConf = $this->getParameter('file_manager')['conf'];
        if (isset($managerConf[$conf]['dir'])) {
            return $managerConf[$conf];
        }

        if (isset($managerConf[$conf]['service'])) {
            $extra = isset($queryParameters['extra']) ? $queryParameters['extra'] : [];
            $conf = $this->get($managerConf[$conf]['service'])->getConf($extra);

            return $conf;
        }

        throw new \RuntimeException('Please define a "dir" or a "service" parameter in your config.yml');
    }

    /**
     * @return mixed
     */
    private function getKernelRoute()
    {
        return $this->getParameter('kernel.root_dir');
    }

    /**
     * @param $queryParameters
     *
     * @return FileManager
     *
     * @throws \Exception
     */
    private function newFileManager($queryParameters)
    {
        if (!isset($queryParameters['conf'])) {
            throw new \RuntimeException('Please define a conf parameter in your route');
        }
        $webDir = $this->getParameter('file_manager')['web_dir'];

        $this->fileManager = new FileManager($queryParameters, $this->getBasePath($queryParameters), $this->getKernelRoute(), $this->get('router'), $webDir);

        return $this->fileManager;
    }

    protected function dispatch($eventName, array $arguments = [])
    {
        $arguments = array_replace([
            'filemanager' => $this->fileManager,
        ], $arguments);

        $subject = $arguments['filemanager'];
        $event = new GenericEvent($subject, $arguments);
        $this->get('event_dispatcher')->dispatch($eventName, $event);
    }
}

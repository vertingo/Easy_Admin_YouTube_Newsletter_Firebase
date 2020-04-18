<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\GcmUser;
use FileManagerBundle\Entity\DownloadFileCounter;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegisterController extends Controller
{

    public function registerAction(Request $request)
    {
             $gcm_token = $_POST['gcm_token'];
         //  $gcm_token = $_GET['gcm_token'];

        if(isset($gcm_token)) 
        {
                 $gcm_token = $_POST['gcm_token'];
                 $gcm_email = $_POST['gcm_email'];
                 $gcm_password = $_POST['gcm_password'];

                 if($gcm_email=='default_user@gmail.com')
                 {
                    $gcm_email = 'admin@vertin-go.com';
                    $gcm_password = 'vertingo16';
                 }
    
             //  $gcm_token = $_GET['gcm_token'];
             //  $gcm_email = 'admin@vertin-go.com';
             //  $gcm_password = 'vertingo16';

            $repository_user_infos = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['email' => $gcm_email]);
            $repository_user_infos_count = $this->getDoctrine()->getRepository('AppBundle:User');
            $repository_gcm_user_infos_count = $this->getDoctrine()->getRepository('AppBundle:GcmUser');

            $qb = $repository_user_infos_count->createQueryBuilder('u');
            $qb->where('u.email=:email');
            $qb->setParameter('email', $gcm_email);
            $user_count = $qb->getQuery()->getResult();
            $user_count = count($user_count);

            $password = $repository_user_infos->getPassword();
             
            $pass = $gcm_password;
            $salt = $repository_user_infos->getSalt();
            $iterations = 5000; // Par défaut
            $result = '';
            $salted = $pass.'{'.$salt.'}';
 
            $digest = hash('sha512', $salted, true);
 
            for($i=1;$i<$iterations;$i++) 
            {
            $digest = hash('sha512', $digest.$salted, true);
            }
            
            $cryptedPass = base64_encode($digest);
            

            if($password==$cryptedPass and $user_count>0)
               { 
                    $pseudo = $repository_user_infos->getUsername();

                    $repository_gcm_user_infos = $this->getDoctrine()->getRepository('AppBundle:GcmUser')->findOneBy(['username' => ''.$pseudo.'']);
             
                    $qb = $repository_gcm_user_infos_count->createQueryBuilder('u');
                    $qb->where('u.username=:username');
                    $qb->setParameter('username', $pseudo);
                    $estdeja = $qb->getQuery()->getResult();
                    $estdeja = count($estdeja);
                  
                    $medias = $this->getDoctrine()->getRepository('FileManagerBundle:DownloadFileCounter')->findBy(['owner' => ''.$pseudo.'']);
                    $medias_videos = $this->getDoctrine()->getRepository('VideoPlayerBundle:MainVideo')->findBy(['username' => ''.$pseudo.'']);
                    $tab_type=array('application/pdf','application/zip');


                    foreach($medias as $row)
                    {
                       $type=$row->getMimeType();

                       if(in_array($type, $tab_type))
                       {
                        $tab[]=$type;
                        $tab2[]=$row->getFilepath();
                        $tab3[]=$row->getFilename();
                       }
                       elseif(in_array($type, $tab_type))
                       {
                        $tab[]=$type;
                        $tab2[]=$row->getFilepath();
                        $tab3[]=$row->getFilename();
                       }

                    }

                    foreach($medias_videos as $row)
                    {
                        $tab4[]=$row->getVideoUrl();
                    }

                    if($estdeja==1)
                    {
                        $em = $this->getDoctrine()->getManager();
                        $queryBuilder = $em->createQueryBuilder();
                        $queryBuilder->update(GcmUser::class, 'u')
                        ->set('u.token', ':token')
                        ->where('u.username = :username')
                        ->setParameter('token',$gcm_token)
                        ->setParameter('username', $pseudo);
                        $query = $queryBuilder->getQuery();

                        $query->execute();
                        $em->flush();

                        $response['message'] = 'Connexion reussie!';
                        $response['success'] = "oui";
                        $response['pseudo'] = $pseudo;
                        $response['estdeja'] = "oui";
                        $response['urls_users_ext'] = $tab;
                        $response['urls_users'] = $tab2;
                        $response['urls_users_noms'] = $tab3;
                        $response['urls_users_videos'] = $tab4;
                    }
                    else
                    {
                        $em = $this->getDoctrine()->getManager();
                        $gcm_user = new GcmUser();

                        $gcm_user->setToken($gcm_token);
                    //  $gcm_user->setIdMembre($id_membre);
                        $gcm_user->setUsername($pseudo);

                        try{
                            $em->persist($gcm_user);
                            $em->flush();
                        } 
                        catch(\PDOException $e) 
                        {
                            echo 'Erreur!!!! '.$e->getMessage();
                            $response['message'] = 'Utilisateur non enregistre!';
                            $response['success'] = "non";
                            $response['pseudo'] ='null';
                            $response['estdeja'] = "non";
                            $response['urls_users_ext'] = array("null");
                            $response['urls_users'] = array("null");
                            $response['urls_users_noms'] = array("null");
                            $response['urls_users_videos'] = array("null");
                        }

                            $response['message'] = 'Connexion reussie!';
                            $response['success'] = "oui";
                            $response['pseudo'] = $pseudo;
                            $response['estdeja'] = "non";
                            $response['urls_users_ext'] = $tab;
                            $response['urls_users'] = $tab2;
                            $response['urls_users_noms'] = $tab3;
                            $response['urls_users_videos'] = $tab4;
                    } 
                    
                }
                else 
                {
                    $response['message'] = "Mauvais identifiant et mot de passe de connexion!";
                    $response['success'] = "non";
                    $response['pseudo'] ='null';
                    $response['estdeja'] = "null";
                    $response['urls_users_ext'] = array("null");
                    $response['urls_users'] = array("null");
                    $response['urls_users_noms'] = array("null");
                    $response['urls_users_videos'] = array("null");
                }
        
        }
          
        $jsonresponse = new JsonResponse();
        $jsonresponse->setData($response);

        $jsonresponse->headers->set('Content-Type', 'application/json');
        return $jsonresponse;
    }

}


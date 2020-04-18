<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class AppMobileRegisterController extends Controller
{
    public function appmobileregisterAction(\Swift_Mailer $mailer)
    {    

       /*   $fbid=345;
            $fbfullname='gui';
            $femail='gui@gmail.com';
            $facebook="oui";*/

            $fbid=$_POST['id'];
            $fbfullname=$_POST['first_name'];
            $femail=$_POST['email'];
            $facebook=$_POST['facebook'];
            
            $message='';

            if($facebook=="oui")
            {
                //On vérifie si ce pseudo ou si l'email est déjà utilisé!!
                $repository_user_infos_count = $this->getDoctrine()->getRepository('AppBundle:User');
                $qb = $repository_user_infos_count->createQueryBuilder('u');
                    $qb->where('u.username=:username');
                    $qb->setParameter('username', $fbfullname);
                    $estdeja = $qb->getQuery()->getResult();
                    $estdeja = count($estdeja);
    
                if($estdeja==1)
	            {
                    $message.='Pseudo deja utilise! Veuillez changer de pseudo!';
                    $response['estdeja'] = "oui";  

                    $em = $this->getDoctrine()->getManager();
                        $queryBuilder = $em->createQueryBuilder();
                        $queryBuilder->update(User::class, 'u')
                        ->set('u.fbid', ':fbid')
                        ->where('u.username = :username')
                        ->setParameter('fbid',$fbid)
                        ->setParameter('username', $fbfullname);
                        $query = $queryBuilder->getQuery();

                        $query->execute();
                        $em->flush();
	            }
	            else
	            {
                    $response['estdeja'] = "non";  
	            
                    $longueur=7;
                    $minuscules = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
                    $majuscules = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
                    $code = ''; //On déclare notre variable
            
                    for ($i = 1; $i <= $longueur; $i++)
                    {
                    //On génère un type aléatoire
                    
                    $type = rand(0,1);

                        if($type == 0)
                        {
                            $caractere = rand(0,9);
                            $code .= $caractere;
                        }
                    
                        if($type == 1)
                        {
                            $nbre_aleatoire = rand(0, 25);
                            $caractere = $majuscules[$nbre_aleatoire];
                            $code .= $caractere;
                        }
                    }

                    $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('admin@vertin-go.com')
                    ->setTo($femail)
                    ->setBody(
                    $this->renderView(
                        // templates/emails/registration.html.twig
                        '@FOSUser/appmobileregistration/registration.html.twig',
                        array('name' => $fbfullname,
                              'password' => $code)
                        ),
                    'text/html'
                    );
                /*
                 * If you also want to include a plaintext version of the message
                     ->addPart(
                    $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                    ),
                    'text/plain'
                    );*/

                    $mailer->send($message);

                    $pass = $code;
                    $salt = '2CjIFjT6/ASTQtcZhXQTfZoo5j6N2iaqCYO567bGZEk';
                    $iterations = 5000; // Par défaut
                    $result = '';
                    $salted = $pass.'{'.$salt.'}';
 
                    $digest = hash('sha512', $salted, true);
 
                    for($i=1;$i<$iterations;$i++) 
                    {
                        $digest = hash('sha512', $digest.$salted, true);
                    }
            
                    $cryptedPass = base64_encode($digest);

                    $array=array('ROLE_ADMIN');

                    $em = $this->getDoctrine()->getManager();
                    $user = new User();

                    $user->setUsername($fbfullname);
                    $user->setUsernameCanonical($fbfullname);
                    $user->setEmail($femail);
                    $user->setEmailCanonical($femail);
                    $user->setEnabled(1);
                    $user->setSalt($salt);
                    $user->setPassword($cryptedPass);
                    $user->setSuperAdmin(false);
                    $user->setRoles($array);
                    $user->setFbid($fbid);

                    $em->persist($user);
                    $em->flush();
                }
            }
            else
            {

              //Si le formulaire a été validé, on vérifie que les champs obligatoires ont bien été remplis
	            if(empty ($_POST['pseudo']) || empty ($_POST['pass']) || empty ($_POST['pass2']) || empty ($_POST['email']))
	            {
	                $message.='Vous devez remplir tous les champs obligatoires du formulaire!';
                }
                else
                {
                    $pseudo=$_POST['pseudo'];
                    $password=$_POST['pass'];
                    $email=$_POST['email'];
                }

                //On vérifie si ce pseudo ou si l'email est déjà utilisé!!
                $repository_user_infos_count = $this->getDoctrine()->getRepository('AppBundle:User');
                $qb = $repository_user_infos_count->createQueryBuilder('u');
                    $qb->where('u.username=:username');
                    $qb->setParameter('username', $pseudo);
                    $estdeja = $qb->getQuery()->getResult();
                    $estdeja = count($estdeja);
    
                if($estdeja==1)
	            {
                    $message.='Pseudo deja utilise! Veuillez changer de pseudo!';
                    $response['estdeja'] = "oui";  
	            }
	            else
	            {
                    $response['estdeja'] = "non";  
	            
                    //On vérifie si un pseudo de parrain est mis, et si oui, on vérifie si ce pseudo existe
	                if($message!='')
	                {
	                //Si il y a eu 1 erreur, on réaffiche le formulaire avec le message d'erreur
                    //	print "<br><center><h4><font color=red>$message</font></h4></center>";
	                }
	                else
	                {
                        $pass = $password;
                        $salt = '2CjIFjT6/ASTQtcZhXQTfZoo5j6N2iaqCYO567bGZEk';
                        $iterations = 5000; // Par défaut
                        $result = '';
                        $salted = $pass.'{'.$salt.'}';
 
                        $digest = hash('sha512', $salted, true);
 
                        for($i=1;$i<$iterations;$i++) 
                        {
                            $digest = hash('sha512', $digest.$salted, true);
                        }
            
                        $cryptedPass = base64_encode($digest);


                        $message = (new \Swift_Message('Hello Email'))
                        ->setFrom('admin@vertin-go.com')
                        ->setTo($femail)
                        ->setBody(
                        $this->renderView(
                            // templates/emails/registration.html.twig
                            '@FOSUser/appmobileregistration/registration.html.twig',
                            array('name' => $pseudo,
                                  'password' => $password)
                            ),
                        'text/html'
                        );
                    /*
                     *  If you also want to include a plaintext version of the message
                         ->addPart(
                        $this->renderView(
                        'emails/registration.txt.twig',
                        array('name' => $name)
                        ),
                        'text/plain'
                        )
                        ;*/
                         
                        $mailer->send($message);

                        $array=array('ROLE_ADMIN');

                        $em = $this->getDoctrine()->getManager();
                        $user = new User();

                        $user->setUsername($pseudo);
                        $user->setUsernameCanonical($pseudo);
                        $user->setEmail($email);
                        $user->setEmailCanonical($email);
                        $user->setEnabled(1);
                        $user->setSalt($salt);
                        $user->setPassword($cryptedPass);
                        $user->setSuperAdmin(false);
                        $user->setRoles($array);

                        $em->persist($user);
                        $em->flush();
                }

            }
                
        } 

            $jsonresponse = new JsonResponse();
            $jsonresponse->setData($response);
    
            $jsonresponse->headers->set('Content-Type', 'application/json');
            return $jsonresponse;
    }

}

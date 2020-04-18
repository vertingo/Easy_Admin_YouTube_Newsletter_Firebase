<?php

namespace VideoPlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Multiplayer;
use VideoPlayerBundle\Youtube\Youtube;
use VideoPlayerBundle\YouTubeDownloader\Masih\YoutubeDownloader\YoutubeDownloader;
use Symfony\Component\HttpFoundation\Response;
use Google\Auth\Credentials\ServiceAccountCredentials;
use Google_Service_Analytics;


class VideoPlayerController extends Controller
{

    public function myyoutubelistplaylistAction()
    {
        //$user =$this->get('security.token_storage')->getToken()->getUser();
        $user=$_GET['pseudo'];

        $youtube = new Youtube(array('key' => 'AIzaSyCeHo3HfcxfHwgOTtqDr2yQPxkUoNOVeS8'));
        $video = $youtube->getVideoInfo('rie-hPVJ7Sw');

        $repository_youtube_infos = $this->getDoctrine()->getRepository('VideoPlayerBundle:PlayListYouTube')->findBy(['playlistusername' => ''.$user.'']);
        $repository_video_infos = $this->getDoctrine()->getRepository('VideoPlayerBundle:MainVideo')->findBy(['username' => ''.$user.'']);
        $nb_playlist=count($repository_youtube_infos);
        $nb_video=count($repository_video_infos);

        $Multiplayer = new Multiplayer\Multiplayer();
        
        $options = array(
	    'autoPlay' => true,
        'foregroundColor' => 'BADA55',
        'showInfos' => true,
        );

        $i=0;
        $tab_playlist_video_id=array();
        
        while($i<$nb_playlist)
        {
            $playlist_id=$repository_youtube_infos[$i]->getPlaylistid();
            $playlist_enabled=$repository_youtube_infos[$i]->getEnabled();
            $playlist=$youtube->getPlaylistItemsByPlaylistId($playlist_id);
        
            foreach($playlist as $item)
            {
                $array = json_decode(json_encode($item),true);
            
                $x=0;
                while($x<$nb_video)
                {
                    if($playlist_enabled && $repository_video_infos[$x]->getVideoId()==$array["snippet"]["resourceId"]["videoId"])
                    {
                        $tab_playlist_video_id[$playlist_id][]=$repository_video_infos[$x]->getVideoId();
                    } 
                    $x=$x+1;
                }

            }
           $i=$i+1;
        }

       $videos = $this->getDoctrine()->getRepository('VideoPlayerBundle:MainVideo')->findBy(['username' => ''.$user.'']);

       $video_embed_html_array=array();

       foreach($videos as $video)
       {
           if($video->getEnabled())
           {
              $video_embed_html_array[]=$Multiplayer->html($video->getVideoUrl(), $options);
           }
       } 


        return $this->render('VideoPlayerBundle:VideoPlayer:my-youtube-list-playlist.html.twig', array(
            'tab_embed_video' => $video_embed_html_array,
            'tab_playlist_video_id' => $tab_playlist_video_id,
            'pseudo' => $user
        ));
    }


    public function renderpdfAction()
    {
        $pdf = new \FPDF();

        $pdf->AddPage();
        $pdf->SetFont('Times','BI',15);

        $pdf->SetTextColor(255, 128, 0);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/vertin_go_website.jpg',0,null,210,43,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,'Tutoriel mettre en ligne son propre site!', '', 'C', false);
        $pdf->Multicell(190, 5,'Projet Front-Back End Easy_Admin_YouTube_NewsLetter_Firebase!', '', 'C', false);
        $pdf->Multicell(190, 5,'Front:', '', 'C', false);
        $pdf->Multicell(190, 5,'Vertin Go Website Design By Mobirise(http://mobirise.com) + Front File Manager', '', 'C', false);
        $pdf->Multicell(190, 5,'Back end:', '', 'C', false);
        $pdf->Multicell(190, 5,'Api YouTube + FireBase(Push Notification) + NewsLetters + File Manager', '', 'C', false);
        $pdf->Multicell(190, 5,'A la suite de ce tuto a vous de personnaliser votre partie front!', '', 'C', false);
        $pdf->Multicell(190, 5,'Illustrations', '', 'C', false);
        $pdf->Multicell(190, 5,'Front-End', '', 'C', false);
        
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front2.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/file_carousel.gif',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,' Ci-dessus tous vos fichiers upload sur le File Manager regroupes sous forme de carousel automatique! ', '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front4.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front5.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front6.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front7.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front8.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front9.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front10.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/front11.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Back-End', '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin2.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin2-2.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,'Donnees extraites de Google Analytics et mise en forme sous forme de graphique!', '', 'C', false);
        $pdf->Multicell(190, 5,'Ci-dessous comment integrer des donnees analytics en deux videos: ', '', 'C', false);
        $pdf->Multicell(190, 5,'YouTube Analytics: https://www.youtube.com/watch?v=ZdW62t0K_MU ', '', 'C', false);
        $pdf->Multicell(190, 5,'Google Analytics: https://www.youtube.com/watch?v=xaDa4wFqTU8', '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin2-6.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin2-7.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin3.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin4.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin5.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin6.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin7.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin7-5.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin8.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin9.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,"Pour l'utilisation des Newsletters ne pas oublier d'attribuer la valeur default au champs Mandant de la table FosUser!", '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin10.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin11.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/admin12.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Installation Localement avec Xampp', '', 'C', false);
        $pdf->Multicell(190, 5,'Prerequis:', '', 'C', false);
        $pdf->Multicell(190, 5,'- *Gestionnaire de commande composer with Xampp!', '', 'C', false);
        $pdf->Multicell(190, 5,'Une fois Xampp installe il faut lancer le serveur apache et MySQL illustre ci-dessous:', '', 'C', false);
        $pdf->Multicell(190, 5,'Assurer vous que les references a votre base de donnee sont bien renseignes dans', '', 'C', false);
        $pdf->Multicell(190, 5,'parameters.yml.dist et parameters.yml. A priori les valeurs sont deja correct pour', '', 'C', false);
        $pdf->Multicell(190, 5,'l\'environnement de dev! A noter qu\'il faut bien distinguer config_dev.yml et', '', 'C', false);
        $pdf->Multicell(190, 5,'config_prod.yml qui comme son nom l\'indique sont deux fichiers de config ', '', 'C', false);
        $pdf->Multicell(190, 5,'propre a leur environnement dans lequelle l\'application evolue! Soit local pour', '', 'C', false);
        $pdf->Multicell(190, 5,'config_dev.yml et en ligne config_prod.yml!', '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/xampp.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Cliquer sur admin pour acceder a l\'interface PhpMyAdmin:', '', 'C', false);
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/phpmyadmin.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Une fois vos bases de donnees recrees elles seront accessibles dans PhpMyAdmin! Pour les recreer voir les commandes ci-dessous:', '', 'C', false);
        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'composer install', '', 'C', false);
        $pdf->Multicell(190, 5,'php bin/console doctrine:database:create', '', 'C', false);
        $pdf->Multicell(190, 5,'(Ou creer la base de donnee easy_admin directement dans PhpMyAdmin)', '', 'C', false);
        $pdf->Multicell(190, 5,'php bin/console doctrine:schema:create', '', 'C', false);
        $pdf->Multicell(190, 5,'(Creation des tables dans la base de donnee easy_admin)', '', 'C', false);
        $pdf->Multicell(190, 5,'php bin/console fos:user:create name test@example.com password', '', 'C', false);
        $pdf->Multicell(190, 5,'(Utilisation du bundle fosuserbundle)', '', 'C', false);
        $pdf->Multicell(190, 5,'php bin/console fos:user:promote user ROLE_ADMIN', '', 'C', false);
        $pdf->Multicell(190, 5,'(Afin de vous logger sur l\'interface admin)', '', 'C', false);
        $pdf->Multicell(190, 5,'Page de login de l\'admin interface: http://localhost/easyadmin-master/web/app_dev.php/login', '', 'C', false);
        $pdf->Multicell(190, 5,'Page de front interface: http://localhost/easyadmin-master/web/app_dev.php/vertingo-website-introduction', '', 'C', false);
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'How to deploy on Heroku', '', 'C', false);
        $pdf->Multicell(190, 5,'Prerequis avant la phase de deploiement:', '', 'C', false);
        $pdf->Multicell(190, 5,'Ajout des lignes suivantes dans le front controller de prod donc app.php dans le dossier web:', '', 'C', false);

        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'Request::setTrustedProxies(array($request->server->get(\'REMOTE_ADDR\')));', '', 'C', false);
        $pdf->Multicell(190, 5,'Request::setTrustedHeaderName(Request::HEADER_FORWARDED, null);', '', 'C', false);
        $pdf->Multicell(190, 5,'Request::setTrustedHeaderName(Request::HEADER_CLIENT_HOST, null);', '', 'C', false);
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Ajout d\'un fichier procfile avec le contenu suivant specifique pour les applications symfony dans le dossier racide du projet:', '', 'C', false);
        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'web: vendor/bin/heroku-php-apache2 web/', '', 'C', false);
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Ajouter une extension PostgreSQL pour la persistance des donnees:', '', 'C', false);

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/postgre.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Multicell(190, 5,'Cliquer sur votre extension dans le sous menu du champs recherche:', '', 'C', false);
        
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/postgre2.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Multicell(190, 5,'Cliquer ensuite sur settings:', '', 'C', false);
   
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/postgre3.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Multicell(190, 5,'Cliquer sur view credentials:', '', 'C', false);

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/postgre4.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Multicell(190, 5,'Les differents champs doivent etre ajouter dans le parameters.yml et parameters.yml.dist dans app/config dans les variables d\'environnements prod donc database_host_prod. Pour database_host_mandanta et b il faut ajouter une fois de plus la meme', '', 'C', false);

        $pdf->Multicell(190, 5,'extension PostgreSQL! Il faut egalement preciser la variable d\'environnement database url dans composer.json disponible une fois', '', 'C', false);

        $pdf->Multicell(190, 5,'l\'ajout de l\'extension PostgreSQL effectue:', '', 'C', false);

        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'"incenteev-parameters": {', '', 'C', false);
        $pdf->Multicell(190, 5,'"file": "app/config/parameters.yml",', '', 'C', false);
        $pdf->Multicell(190, 5,'"env-map": {', '', 'C', false);
        $pdf->Multicell(190, 5,'"database_url": "DATABASE_URL",', '', 'C', false);
        $pdf->Multicell(190, 5,'"database_url2": "HEROKU_POSTGRESQL_BLUE_URL",', '', 'C', false);
        $pdf->Multicell(190, 5,'"database_url3": "HEROKU_POSTGRESQL_ONYX_URL",', '', 'C', false);
        $pdf->Multicell(190, 5,'"monolog_action_level": "LOG_LEVEL"', '', 'C', false);
        $pdf->Multicell(190, 5,'} }', '', 'C', false);   
        $pdf->Multicell(190, 5,' ', '', 'C', false); 
        
        $pdf->Multicell(190, 5,'Commande de Deploiement:', '', 'C', false);  
        $pdf->Multicell(190, 5,'Prerequis:', '', 'C', false);  
        $pdf->Multicell(190, 5,'-*Gestionnaire de commande Git!', '', 'C', false);  
        $pdf->Multicell(190, 5,'-*Gestionnaire de commande Composer!', '', 'C', false);  
        $pdf->Multicell(190, 5,'-*Gestionnaire de commande Heroku!', '', 'C', false);  

        $pdf->Multicell(190, 5,'Creer un projet sur Heroku, installer le gestionnaire de commande Heroku en local et taper les commandes suivantes:', '', 'C', false);  

        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'heroku login', '', 'C', false);  

        $pdf->Multicell(190, 5,'heroku create (Creer un nom d\'app aleatoire sinon creer la sur Heroku directement!)', '', 'C', false);  

        $pdf->Multicell(190, 5,'heroku git:remote -a nom_de_votre_app_heroku', '', 'C', false);  

        $pdf->Multicell(190, 5,'heroku config:set ENV=PRODUCTION', '', 'C', false);  
        $pdf->Multicell(190, 5,'git add .', '', 'C', false);  
        $pdf->Multicell(190, 5,'git commit -am "make it better"', '', 'C', false);  
        $pdf->Multicell(190, 5,'git push heroku master', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);
    
        $pdf->Multicell(190, 5,'Une fois deploye sur le serveur Heroku:', '', 'C', false);  
        $pdf->Multicell(190, 5,'Il faut recreer la base donnee en se connectant a distance sur le terminal du serveur:', '', 'C', false);  

        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'heroku run bash', '', 'C', false);  

        $pdf->Multicell(190, 5,'php bin/console doctrine:schema:create', '', 'C', false);
        $pdf->Multicell(190, 5,'(Creation des tables dans la base de donnee easy_admin)', '', 'C', false);    
        $pdf->Multicell(190, 5,'php bin/console fos:user:create name test@example.com password', '', 'C', false);
        $pdf->Multicell(190, 5,'(Utilisation du bundle fosuserbundle)', '', 'C', false);   
        $pdf->Multicell(190, 5,'php bin/console fos:user:promote user ROLE_ADMIN', '', 'C', false);  
        $pdf->Multicell(190, 5,'(Afin de vous connecter sur l\'interface admin)', '', 'C', false);
        $pdf->Multicell(190, 5,'Page de login de l\'admin interface: https://platform-media.herokuapp.com/login', '', 'C', false);  
        $pdf->Multicell(190, 5,'Page de front interface: https://platform-media.herokuapp.com/vertingo-website-introduction', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Supplements de configuration pour la connexion a YouTube:', '', 'C', false);  
        $pdf->Multicell(190, 5,'Creer un projet dans Google Cloud Console! Activer YouTube Data Api V3', '', 'C', false);  
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/google%20cloud%20console.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Cliquer sur creer des identifiants Id Client Auth', '', 'C', false);  
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/google%20cloud%20console2.png',0,null,210,73,null,'https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1');

        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);
        $pdf->Multicell(190, 5,'Origines JavaScript autorisees:', '', 'C', false);  

        $pdf->Multicell(190, 5,'- http://votre_heroku_app.herokuapp.com', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Et URI de redirection autorises:', '', 'C', false);  
        $pdf->Multicell(190, 5,'- http://votre_heroku_app.herokuapp.com/admin/dashboard/', '', 'C', false);  
        $pdf->Multicell(190, 5,'- http://localhost/easyadmin-master/web/app_dev.php/admin/dashboard/', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Une fois la cle cree copier coller cette cle puis renseigne la dans web/youtube:', '', 'C', false);  
        $pdf->Multicell(190, 5,'- auth.js ligne 5', '', 'C', false);  
        $pdf->Multicell(190, 5,'- analytics_codelab.js ligne 4', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Une fois la connexion via Google configure logger vous sur votre Interface Admin afin de synchroniser votre compte avec YouTube', '', 'C', false);  
        $pdf->Multicell(190, 5,'et ensuite accedez a la page: https://votre_heroku_app.herokuapp.com/my-youtube-list-playlist?pseudo=votre_nom_d_utilisateur', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'Voici l\'exemple de ma page playlist automatiquement genere une fois connecte sur mon espace administrateur et la connexion', '', 'C', false);  
        $pdf->Multicell(190, 5,'etabli via YouTube Api V3: https://platform-media.herokuapp.com/my-youtube-list-playlist?pseudo=vertingo', '', 'C', false);  
        $pdf->Multicell(190, 5,' ', '', 'C', false);

        $pdf->Multicell(190, 5,'Synchroniser avec l\'Application Mobile', '', 'C', false);  

        $pdf->Multicell(190, 5,'- Synchronisation des fichiers uploads sur le File Manager.', '', 'C', false);  
        $pdf->Multicell(190, 5,'- Synchronisation des videos et playlist de votre chaine YouTube.', '', 'C', false);  
        $pdf->Multicell(190, 5,'- Synchronisation avec Google Cloud Messaging pour reception de notification push.', '', 'C', false);  

        $pdf->Multicell(190, 5,' ', '', 'C', false);
        $pdf->Multicell(190, 5,'Ci-dessous illustration de la synchronisation avec l\'application mobile TopsiteApp et reception de notification push!', '', 'C', false);  
        $pdf->Multicell(190, 5,' ============================================================= ', '', 'C', false);

        $pdf->Image('https://raw.githubusercontent.com/vertingo/Easy_Admin_YouTube_Newsletter_Firebase/master/web/assets/images/github/Disponible-sur-App-Store-Logo.jpg',0,null,210,33,null,'https://play.google.com/store/apps/details?id=com.vertin_go.topsiteapp&hl=fr');


        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf'));
    }


    public function learnsymfonyframeworkAction()
    {

     /* $youtube = new YoutubeDownloader('XoZuQBs3syI');

        $youtube->onProgress = function ($downloadedBytes, $fileSize, $index, $count) 
        {
            if ($count > 1) echo '[' . $index . ' of ' . $count . ' videos] ';
        
            if ($fileSize > 0)
		        echo "\r" . 'Downloaded ' . $downloadedBytes . ' of ' . $fileSize . ' bytes [%' . number_format($downloadedBytes * 100 / $fileSize, 2) . '].';
	        else
		        echo "\r" . 'Downloading...'; // File size is unknown, so just keep downloading
        };

        $youtube->download();

        $ffmpeg = $this->get('dubture_ffmpeg.ffmpeg');

        $video = $ffmpeg->open('/your/source/folder/input.avi');

        $video
        ->filters()
        ->resize(new Dimension(1280, 720), ResizeFilter::RESIZEMODE_INSET)
        ->synchronize();

        $video->save(new X264(), '/your/target/folder/video.mp4');*/

        $smart_container='<center><div id="smart-widget"></div></center>
        <script src="https://websdk.getsocial.im/sdk.min.js"></script>
        <script type="text/javascript">
          var getSocial = new GetSocialSDK({appId: "S07We6x9YQm"});
  
        // Call create with the ID of the div where the widget should be shown
        // and a unique token of your choice (e.g "mywebsite")
        getSocial.smartWidget.create({
          target: "smart-widget",
          token: "mywebsite"
        });
      
        </script>';


        return $this->render('VideoPlayerBundle:VideoPlayer:learn-symfony-framework.html.twig', array(
            'smart_container' =>  $smart_container
        ));
    }


    public function glossaryinformaticsblockAction()
    {
        $smart_container='<center><div id="smart-widget"></div></center>
        <script src="https://websdk.getsocial.im/sdk.min.js"></script>
        <script type="text/javascript">
          var getSocial = new GetSocialSDK({appId: "S07We6x9YQm"});
  
        // Call create with the ID of the div where the widget should be shown
        // and a unique token of your choice (e.g "mywebsite")
        getSocial.smartWidget.create({
          target: "smart-widget",
          token: "mywebsite"
        });
      
        </script>';


        return $this->render('VideoPlayerBundle:VideoPlayer:glossary-informatics-block.html.twig', array(
            'smart_container' =>  $smart_container
        ));
    }

    public function vertingowebsiteintroductionAction()
    {

        $repository_file_infos = $this->getDoctrine()->getRepository('FileManagerBundle:DownloadFileCounter')->findBy(['owner' => 'vertingo']);

        $i=0;
        $tab_file_infos=array();

        foreach($repository_file_infos as $file)
        {
            $tab_file_infos[$i]['url']=$file->getFilepath();
            $tab_file_infos[$i]['title']=$file->getFilename();
            $tab_file_infos[$i]['download_counter']=$file->getDownloadCounter();
            $tab_file_infos[$i]['mime_type']=$file->getMimeType();
            $i=$i+1;
        }

        $smart_container='<center><div id="smart-widget"></div></center>
        <script src="https://websdk.getsocial.im/sdk.min.js"></script>
        <script type="text/javascript">
          var getSocial = new GetSocialSDK({appId: "S07We6x9YQm"});
  
        // Call create with the ID of the div where the widget should be shown
        // and a unique token of your choice (e.g "mywebsite")
        getSocial.smartWidget.create({
          target: "smart-widget",
          token: "mywebsite"
        });
      
        </script>';
  
        return $this->render('VideoPlayerBundle:VideoPlayer:vertingo-website-introduction.html.twig', array(
            'tab_file_infos' => $tab_file_infos,
            'smart_container' =>  $smart_container
        ));
    }


    public function learnandroidstudiodevelopmentandgoogleplaydeploymentAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:learn-android-studio-development-and-google-play-deployment.html.twig', array(       
        ));
    }


    public function socialblocksAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:social-blocks.html.twig', array(
            
        ));
    }

    public function trymyowngooglespreadsheetAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:try-my-own-google-spreadsheet.html.twig', array(
            
        ));
    }

    public function buildmyownchatbotAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:build-my-own-chatbot.html.twig', array(
            
        ));
    }


    public function buildmyownvertingowebsiteAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:build-my-own-vertingo-website.html.twig', array(
            
        ));
    }


    public function howtointegrategoogledataanalyticsAction()
    {
        $googleanalytics="
<script>
(function(w,d,s,g,js,fs){
g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
js.src='https://apis.google.com/js/platform.js';
fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>";

        $googleanalytics2='
<div id="chart-1-container"></div>
<div id="chart-2-container"></div>';

        $googleanalytics3="
<script>
gapi.analytics.ready(function() {
   
/**
* Authorize the user with an access token obtained server side.
*/
gapi.analytics.auth.authorize({
'serverAuth': {
'access_token': '{{ ACCESS_TOKEN_FROM_SERVICE_ACCOUNT }}'
}
});

/**
* Creates a new DataChart instance showing sessions over the past 0 days.
* It will be rendered inside an element with the id 'chart-1-container'.
*/
var dataChart1 = new gapi.analytics.googleCharts.DataChart({
query: {
        'ids': 'ga:100367422', // <-- Replace with the ids value for your view.
        'start-date': '0daysAgo',
        'end-date': 'yesterday',
        'metrics': 'ga:sessions,ga:users',
        'dimensions': 'ga:date'
        },
        chart: {
        'container': 'chart-1-container',
        'type': 'LINE',
        'options': {
        'width': '100%'
        }
    }
    });
    dataChart1.execute();

/**
* Creates a new DataChart instance showing top 5 most popular demos/tools
* amongst returning users only.
* It will be rendered inside an element with the id 'chart-3-container'.
*/
var dataChart2 = new gapi.analytics.googleCharts.DataChart({
query: {
        'ids': 'ga:100367422', // <-- Replace with the ids value for your view.
        'start-date': '0daysAgo',
        'end-date': 'yesterday',
        'metrics': 'ga:pageviews',
        'dimensions': 'ga:pagePathLevel1',
        'sort': '-ga:pageviews',
        'filters': 'ga:pagePathLevel1!=/',
        'max-results': 7
        },
        chart: {
        'container': 'chart-2-container',
        'type': 'PIE',
        'options': {
        'width': '100%',
        'pieHole': 4/9,
            }
        }
    });
    dataChart2.execute();
    });
</script>";


$access_token = $this->getService();

        return $this->render('VideoPlayerBundle:VideoPlayer:how-to-integrate-google-data-analytics.html.twig', array(
            'googleanalytics' => $googleanalytics,
            'googleanalytics2' => $googleanalytics2,
            'googleanalytics3' => $googleanalytics3,
            'ACCESS_TOKEN_FROM_SERVICE_ACCOUNT' => $access_token['access_token']
        ));
    }

    public function howtointegrateyoutubedataanalyticsAction()
    {
        $youtubeanalytics='
<script src="https://apis.google.com/js/api.js"></script>
<script>
    function authenticate() 
    {
        return gapi.auth2.getAuthInstance()
        .signIn({scope: "https://www.googleapis.com/auth/yt-analytics.readonly"})
        .then(function() { console.log("Sign-in successful"); },
        function(err) { console.error("Error signing in", err); });
    }

    function loadClient() 
    {
        return gapi.client.load("https://youtubeanalytics.googleapis.com/$discovery/rest?version=v2")
        .then(function() { console.log("GAPI client loaded for API"); },
        function(err) 
        { 
            console.error("Error loading GAPI client for API", err); 
        });
    }

    function convertDate(inputFormat) 
    {
        function pad(s) { return (s < 10) ? "0" + s : s; }
        var d = new Date(inputFormat);
        return [d.getFullYear(),pad(d.getMonth()+1),pad(d.getDate())].join("-");
    }

    // Make sure the client is loaded and sign-in is complete before calling this method.
    function execute() 
    {
        var d = new Date();

        return gapi.client.youtubeAnalytics.reports.query({
        "ids": "channel==MINE",
        "startDate": "2017-09-01",
        "endDate": convertDate(d),
        "metrics": "views,estimatedMinutesWatched,averageViewDuration,averageViewPercentage,subscribersGained,likes,dislikes,shares",
        "dimensions": "day",
        "sort": "day"
        })
        .then(function(response) 
        {
        // Handle the results here (response.result has the parsed body).
                          
        console.log("Response",response);

        $.ajax({
        type: "post",
        url: "https://platform-media.herokuapp.com/insertyoutubeanalytics",  
        data: { 
               response: response.result.rows
              },
                    success: function (response, request) {}
               });
              },
            
              function(err) 
              { 
                    console.error("Execute error", err); 
              });
    }

    gapi.load("client:auth2", function() 
    {
        gapi.auth2.init({client_id: "your_client_id_obtained_from_Google_Cloud_Console"});
    });
</script>';

$youtubeanalytics2='
<button onclick="authenticate().then(loadClient)">Authorize First And Load</button>
<button onclick="execute()">Load YouTube Analytics</button>';

        return $this->render('VideoPlayerBundle:VideoPlayer:how-to-integrate-youtube-data-analytics.html.twig', array(
            'youtubeanalytics' => $youtubeanalytics,
            'youtubeanalytics2' => $youtubeanalytics2
            
        ));
    }

    public function indexyourwebsiteandlearnhowtobecomewellrankedinsearchengineAction()
    {
$recipe='<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "Recipe",
"name": "Comment devenir un développeur?",
"image": ["https://platform-media.herokuapp.com/assets/images/03.jpg"],
"author": {"@type": "Person",
           "name": "Vertin Go"},
"datePublished": "2019-01-10",
"description": "La Chaîne Vertin Go Website propose un contenu assez divers mais axé principalement sur le développement informatique! A tous ceux passionnés par les technologies du numériques ou bien étudiant en développement informatique n\'hésitez surtout pas à me solliciter et à vous abonner à ma chaîne....",          
"recipeCategory": "Informatiques",
"keywords": "Informatiques, Formations Pédagogiques, SEO, Formations, Développeurs, Développements Informatiques, Tutoriels, Search Engine Optimization, Symfony, Framework",
"video": [{"name": "Comment devenir un développeur?",
           "description": "Apprenez à devenir un développeur avec le site Vertin Go Website!",
           "thumbnailUrl": [ "https://example.com/photos/1x1/photo.jpg",
                             "https://example.com/photos/4x3/photo.jpg",
                             "https://example.com/photos/16x9/photo.jpg"],
"contentUrl": "http://www.example.com/video123.flv",
"embedUrl": "http://www.example.com/videoplayer.swf?video=123",
"uploadDate": "2018-02-05T08:00:00+08:00",
"duration": "PT1M33S",
"interactionCount": "2347",
"expires": "2019-02-05T08:00:00+08:00"
}],
"aggregateRating": {"@type": "AggregateRating",
                    "ratingValue": "5",
                    "ratingCount": "18"},
"review": {"@type": "Review",
           "reviewRating": {"@type": "Rating",
                            "ratingValue": "4",
                            "bestRating": "5"},
           "author": { "@type": "Person",
                       "name": "Vertin Go"},
           "datePublished": "2019-01-10",
           "reviewBody": "",
           "publisher": "Vertin Go Production"
    }
}
</script>';

$carousel='<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "itemListElement": [
    {"@type": "ListItem",
     "position": 1,
     "url": "https://platform-media.herokuapp.com/vertingo-website-introduction"},
    {"@type": "ListItem",
     "position": 2,
     "url": "https://platform-media.herokuapp.com/glossary-informatics-block"},
    {"@type": "ListItem",
     "position": 3,
     "url": "https://platform-media.herokuapp.com/learn-symfony-framework"},
    {"@type": "ListItem",
     "position": 4,
     "url": "https://platform-media.herokuapp.com/learn-android-studio-developpment-and-google-play-deployment"},
    {"@type": "ListItem",
     "position": 5,
     "url": "https://platform-media.herokuapp.com/social-blocks"},
    {"@type": "ListItem",
     "position": 6,
     "url": "https://platform-media.herokuapp.com/try-my-own-google-spreadsheet"},
    {"@type": "ListItem",
     "position": 7,
     "url": "https://platform-media.herokuapp.com/build-my-own-vertingo-website"},
    {"@type": "ListItem",
     "position": 8,
     "url": "https://platform-media.herokuapp.com/build-my-own-chatbot"},
    {"@type": "ListItem",
     "position": 9,
     "url": "https://platform-media.herokuapp.com/index-your-website-and-learn-how-to-become-well-ranked-in-search-engine"},
    {"@type": "ListItem",
     "position": 10,
     "url": "https://platform-media.herokuapp.com/my-youtube-list-playlist?pseudo=vertingo"},
    {"@type": "ListItem",
     "position": 11,
     "url": "https://platform-media.herokuapp.com/testimonials"}
    ]
  }
</script>';


        return $this->render('VideoPlayerBundle:VideoPlayer:index-your-website-and-learn-how-to-become-well-ranked-in-search-engine.html.twig', array(
            'recipe' => $recipe,
            'carousel' => $carousel
        ));
    }

    public function downloadandinstalllocallyAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:download-and-install-locally.html.twig', array(
            
        ));
    }

    public function conditionsAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:conditions.html.twig', array(
            
        ));
    }

    public function testimonialsAction()
    {
        return $this->render('VideoPlayerBundle:VideoPlayer:testimonials.html.twig', array(
            
        ));
    }


    private function getService()
    {
        $key_file_location = $this->getParameter('kernel.root_dir').'/../src/AppBundle/Keyfile/topsite-admin-symfony-1219cee3cde9.json';
        if (file_exists($key_file_location)) {
            $serviceAccount = new ServiceAccountCredentials(Google_Service_Analytics::ANALYTICS_READONLY, $key_file_location);
            $serviceAccount->fetchAuthToken();

            return $serviceAccount->getLastReceivedToken();
        }

        return null;
    }


}

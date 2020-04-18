<?php
namespace VideoPlayerBundle\EventListener;

use Doctrine\Common\Persistence\ObjectManager;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use RedjanYm\FCMBundle\FCMClient;
use sngrl\PhpFirebaseCloudMessaging\Client;

class UploadListener
{
    /**
     * @var ObjectManager
     */
    private $om;

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }
    
    public function onUpload(PostPersistEvent $event)
    {
        //...
        
        //if everything went fine
        $response = $event->getResponse();
        $response['success'] = true;


        $client= new Client();
        $client->setApiKey('AIzaSyDz99I-m4VDKvM3P9l8wo5QieBxzwlu1hQ');
        $fcmClient = new FCMClient($client);
         
        $repository_gcm_user_infos = $this->getDoctrine()->getRepository('AppBundle:GcmUser')->findOneBy(['username' => 'vertingo']);

        if($repository_gcm_user_infos->getEnabled())
        {
            $token=$repository_gcm_user_infos->getToken();
            $notification=$fcmClient->createDeviceNotification('Ffmpeg Upload!','Vous venez de recevoir un upload Ffmpeg:',$token);
            $fcmClient->sendNotification($notification);
        }

        return $response;
    }
}
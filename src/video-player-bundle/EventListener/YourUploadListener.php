<?php
namespace VideoPlayerBundle\EventListener;

use FFMpeg\Exception\InvalidArgumentException;
use FFMpeg\Exception\RuntimeException;
use Oneup\UploaderBundle\Event\PostUploadEvent;
use RedjanYm\FCMBundle\FCMClient;
use sngrl\PhpFirebaseCloudMessaging\Client;

class YourUploadListener
{
    protected $doctrine;
    protected $ffmpeg;


    public function __construct($doctrine, $ffmpeg)
    {
        $this->doctrine = $doctrine;
        $this->ffmpeg = $ffmpeg;
    }

    public function onUpload(PostUploadEvent $event)
    {
        $file_path = $event->getFile()->getPathname();
        $response = $event->getResponse();
        $video = null;
        try{
            $ffmpeg = $this->ffmpeg->open($file_path);
        }catch(InvalidArgumentException $e){
            $response->setSuccess(false);
            $response->setError("Could not load file");
            $response['preventRetry'] = true;
            unlink($file_path);
            return;
        }catch(RuntimeException $e){
            $response->setSuccess(false);
            $response->setError("Invalid File");
            $response['preventRetry'] = true;
            unlink($file_path);
            return;
        }

        // Sample code to check if video was uploaded
        $streams = $ffmpeg->getStreams();
        foreach($streams as $stream){
            if($stream->get('codec_type') == 'video'){
                $video = $stream;
            }
        }

        if(is_null($video)){
            $response->setSuccess(false);
            $response->setError("Invalid Video");
            $response['preventRetry'] = true;
            unlink($file_path);
            return;
        }

        // Do what you want with the video
        // 

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

      /*$video = $ffmpeg->open($file_path);

        $ffmpeg
        ->filters()
        ->resize(new Dimension(1280, 720), ResizeFilter::RESIZEMODE_INSET)
        ->synchronize();

        $ffmpeg->save(new X264(),'C:\xampp\htdocs\easyadmin-master\web\uploads\gallery\test.mp4');*/
    }
}
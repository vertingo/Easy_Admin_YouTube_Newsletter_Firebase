<?php

/*
 * This file is part of the FCMBundle.
 *
 * (c) Redjan Ymeraj <ymerajr@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FcmBundle;

use FcmBundle\Entity\DeviceNotification;
use FcmBundle\Entity\TopicNotification;
use sngrl\PhpFirebaseCloudMessaging\Client;
use sngrl\PhpFirebaseCloudMessaging\Message;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Device;
use sngrl\PhpFirebaseCloudMessaging\Recipient\Topic;

/**
 * The FCMBundle primary class.
 *
 * @author Redjan Ymeraj <ymerajr@yahoo.com>
 */
class FCMClient
{
    /**
     * @var Client
     */
    private $client;

    /**
     * FCMClient constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a notification of type Device Notification
     *
     * @param null $title
     * @param null $body
     * @param null | array $token
     * @return DeviceNotification
     */
    public function createDeviceNotification($title = null, $body = null, $token = array())
    {
        $data=array('title' => $title, 'text' => $body);
        $notification = new DeviceNotification();
        $notification
            ->setTitle($title)
            ->setBody($body)
            //->setData($data)
            ->setPriority('high');

        if(is_array($token)){
            $notification->setDeviceTokens($token);
        } else {
            $notification->addDeviceToken($token);
        }

        return $notification;
    }

    /**
     * Create a notification of type Topic
     *
     * @param null $title
     * @param null $body
     * @param null $topic
     * @return TopicNotification
     */
    public function createTopicNotification($title = null, $body = null, $topic = null)
    {
        $notification = new TopicNotification();
        $notification
            ->setTitle($title)
            ->setBody($body)
            ->setTopic($topic);

        return $notification;
    }

    /**
     * Subscribe devices to a Topic
     *
     * @param null $topicId
     * @param array $deviceTokens
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function subscribeDevicesToTopic($topicId = null, $deviceTokens = array())
    {
        if(!$topicId || empty($deviceTokens)){
            throw new \InvalidArgumentException("Please check arguments!");
        }

        return $this->client->addTopicSubscription($topicId, $deviceTokens);
    }

    /**
     * Remove devices from a Topic
     *
     * @param null $topicId
     * @param array $deviceTokens
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function removeDevicesFromTopic($topicId = null, $deviceTokens = array())
    {
        if(!$topicId || empty($deviceTokens)){
            throw new \InvalidArgumentException("Please check arguments!");
        }

        return $this->client->removeTopicSubscription($topicId, $deviceTokens);
    }

    /**
     * @param DeviceNotification | TopicNotification $notification
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function sendNotification($notification)
    {
        if (!$notification instanceof DeviceNotification && !$notification instanceof TopicNotification) {
            throw new \InvalidArgumentException('Notification must be of type DeviceNotification or TopicNotification');
        }

        $message = (new Message())
            ->setNotification($notification)
            ->setData($notification->getData())
            ->setPriority($notification->getPriority())
            ->setJsonData($notification->getJsonData())
            ->setContentAvailable($notification->getContentAvailable())
            ->setCollapseKey($notification->getCollapseKey());

        // Check for the type of Notification
        if($notification instanceof DeviceNotification){
            foreach ($notification->getDeviceTokens() as $deviceToken) {
                $message->addRecipient(new Device($deviceToken));
            }
        } else if ($notification instanceof TopicNotification) {
            $message->addRecipient(new Topic($notification->getTopic()));
        }

        return $this->client->send($message);
    }
}

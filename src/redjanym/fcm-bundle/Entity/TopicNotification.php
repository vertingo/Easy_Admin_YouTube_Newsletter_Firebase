<?php

namespace FcmBundle\Entity;

use sngrl\PhpFirebaseCloudMessaging\Notification;

class TopicNotification extends Notification implements \RedjanYm\FCMBundle\Model\TopicNotificationInterface
{

    use NotificationData;

    /**
     * @var string $topic
     */
    private $topic;

    /**
     * @inheritdoc
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTopic()
    {
        if($this->topic){
            return $this->topic;
        } else {
            throw new \InvalidArgumentException('The Topic Notification must have a Topic!');
        }
    }
}

<?php

namespace NewslettersBundle\Model\Subscriber;

interface SubscriberLocaleInterface extends SubscriberInterface
{
    /**
     * @return string
     */
    public function getLocale();
}

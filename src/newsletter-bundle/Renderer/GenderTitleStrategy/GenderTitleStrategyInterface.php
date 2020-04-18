<?php

namespace NewslettersBundle\Renderer\GenderTitleStrategy;

use NewslettersBundle\Model\Subscriber\SubscriberGenderTitleInterface;

interface GenderTitleStrategyInterface
{
    /**
     * @param  SubscriberGenderTitleInterface $subscriber
     * @return string
     */
    public function getGenderTitle(SubscriberGenderTitleInterface $subscriber);
}

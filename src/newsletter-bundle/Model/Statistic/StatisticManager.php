<?php

namespace NewslettersBundle\Model\Statistic;

use NewslettersBundle\Model\Subscriber\SubscriberLocaleInterface;
use NewslettersBundle\Model\Subscriber\SubscriberGenderTitleInterface;
use NewslettersBundle\Model\Subscriber\SubscriberInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;

abstract class StatisticManager implements StatisticManagerInterface
{
    protected $mandantName;
    protected $readLogClass;
    protected $sendLogClass;
    protected $unsubscribeLogClass;

    public function __construct($mandantName, $readLogClass, $sendLogClass, $unsubscribeLogClass)
    {
        $this->mandantName = $mandantName;
        $this->readLogClass = $readLogClass;
        $this->sendLogClass = $sendLogClass;
        $this->unsubscribeLogClass = $unsubscribeLogClass;
    }

    protected function createNewsletterReadLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        return $this->createNewsletterLog($this->readLogClass, $newsletter, $subscriber, $message);
    }

    protected function createNewsletterSendLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        return $this->createNewsletterLog($this->sendLogClass, $newsletter, $subscriber, $message);
    }

    protected function createNewsletterUnsubscribeLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        return $this->createNewsletterLog($this->unsubscribeLogClass, $newsletter, $subscriber, $message);
    }

    protected function createNewsletterLog($className, NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        /* @var $log \Ibrows\Bundle\NewsletterBundle\Model\Log\LogInterface */
        $log = new $className();

        $log
                ->setNewsletterId($newsletter->getId())
                ->setSubscriberId($subscriber->getId())
                ->setSubscriberEmail($subscriber->getEmail())
                ->setMessage($message)
                ->setMandantName($this->mandantName)
        ;

        if ($subscriber instanceof SubscriberGenderTitleInterface) {
            $log
                    ->setSubscriberCompanyname($subscriber->getCompanyname())
                    ->setSubscriberFirstname($subscriber->getFirstname())
                    ->setSubscriberGender($subscriber->getGender())
                    ->setSubscriberLastname($subscriber->getLastname())
                    ->setSubscriberTitle($subscriber->getTitle())
            ;
        }

        if ($subscriber instanceof SubscriberLocaleInterface) {
            $log
                ->setSubscriberLocale($subscriber->getLocale())
            ;
        }

        return $log;
    }
}

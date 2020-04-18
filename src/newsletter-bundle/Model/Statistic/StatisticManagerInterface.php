<?php

namespace NewslettersBundle\Model\Statistic;

use NewslettersBundle\Model\Subscriber\SubscriberInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;

interface StatisticManagerInterface
{
    public function getUnsubscribeLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);
    public function getReadLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);
    public function getSendLogs(array $criteria = null, array $orderBy = array(), $limit = null, $offset = null);

    public function addNewsletterReadLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
    public function addNewsletterSendLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
    public function addNewsletterUnsubscribeLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message);
}

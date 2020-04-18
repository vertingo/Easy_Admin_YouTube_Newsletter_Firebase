<?php

namespace NewslettersBundle\Model\Subscriber;

use NewslettersBundle\Model\Mandant\MandantInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;

interface SubscriberInterface
{
    /**
     * @return integer
     */
    public function getId();

    /**
     * @return string
     */
    public function __toString();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getHash();

    /**
     * @return MandantInterface
     */
    public function getMandant();

    /**
     * @return NewsletterInterface[]
     */
    public function getNewsletters();

    /**
     * @param  NewsletterInterface $newsletter
     * @return SubscriberInterface
     */
    public function addNewsletter(NewsletterInterface $newsletter);

    /**
     * @param  NewsletterInterface $newsletter
     * @return SubscriberInterface
     */
    public function removeNewsletter(NewsletterInterface $newsletter);
}

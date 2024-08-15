<?php

namespace NewslettersBundle\Model\Mandant;

use NewslettersBundle\Model\Block\BlockInterface;
use NewslettersBundle\Model\Design\DesignInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;
use NewslettersBundle\Model\Newsletter\SendSettingsInterface;
use NewslettersBundle\Model\Subscriber\GroupInterface;
use NewslettersBundle\Model\Subscriber\SubscriberInterface;

interface MandantInterface
{
    /**
     * @return NewsletterInterface[]
     */
    public function getNewsletters();

    /**
     * @return BlockInterface[]
     */
    public function getBlocks();

    /**
     * @return DesignInterface[]
     */
    public function getDesigns();

    /**
     * @return string
     */
    public function getRendererName();

    /**
     * @param string $rendererName
     */
    public function setRendererName($rendererName);

    /**
     * @return SendSettingsInterface
     */
    public function getSendSettings();

    /**
     * @param  SendSettingsInterface $settings
     */
    public function setSendSettings(SendSettingsInterface $settings);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param  string $name
     */
    public function setName($name);

    /**
     * @return SubscriberInterface[]
     */
    public function getSubscribers();

    /**
     * @return GroupInterface[]
     */
    public function getSubscriberGroups();

    /**
     * @return string
     */
    public function getHash();

    /**
     * @param  string $hash
     */
    public function setHash($hash);

    /**
     * @return string
     */
    public function getSalt();
}

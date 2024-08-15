<?php

namespace AppBundle\Entity\Newsletter;

use NewslettersBundle\Entity\SendSettings as BaseSendSettings;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ibrows_newsletter_send_settings")
 */
class SendSettings extends BaseSendSettings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

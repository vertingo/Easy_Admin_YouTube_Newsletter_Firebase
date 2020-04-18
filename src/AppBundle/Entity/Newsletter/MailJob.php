<?php

namespace AppBundle\Entity\Newsletter;

use NewslettersBundle\Entity\MailJob as BaseMailJob;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ibrows_newsletter_job_mail")
 */
class MailJob extends BaseMailJob
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

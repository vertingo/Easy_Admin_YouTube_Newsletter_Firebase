<?php

namespace AppBundle\Entity\Newsletter\Log;

use NewslettersBundle\Entity\Log as BaseLog;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ibrows_newsletter_log")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({
 *      "ReadLog" = "ReadLog",
 *      "SendLog" = "SendLog",
 *      "UnsubscribeLog" = "UnsubscribeLog"
 * })
 */
abstract class AbstractLog extends BaseLog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

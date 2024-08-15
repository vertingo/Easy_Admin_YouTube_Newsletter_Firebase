<?php

namespace AppBundle\Entity\Newsletter;

use NewslettersBundle\Entity\Subscriber as BaseSubscriber;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *      name="ibrows_newsletter_subscriber",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="unique_idx", columns={"hash"})}
 * )
 */
class Subscriber extends BaseSubscriber
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Newsletter", mappedBy="subscribers")
     */
    protected $newsletters;

    /**
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="subscribers")
     * @ORM\JoinTable(name="ibrows_newsletter_subscribers_groups")
     */
    protected $groups;

    /**
     * @ORM\ManyToOne(targetEntity="Mandant", inversedBy="subscribers")
     */
    protected $mandant;
}

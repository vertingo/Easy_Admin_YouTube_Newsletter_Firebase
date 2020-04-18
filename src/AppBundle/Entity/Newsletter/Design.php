<?php

namespace AppBundle\Entity\Newsletter;

use NewslettersBundle\Entity\Design as BaseDesign;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ibrows_newsletter_design")
 */
class Design extends BaseDesign
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Mandant", inversedBy="designs")
     * @ORM\JoinColumn(name="mandant_id", referencedColumnName="id")
     */
    protected $mandant;
}

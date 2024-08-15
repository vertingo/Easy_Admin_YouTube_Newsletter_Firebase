<?php

namespace NewslettersBundle\Entity;

use NewslettersBundle\Model\Design\Design as AbstractDesign;

use Doctrine\ORM\Mapping as ORM;

class Design extends AbstractDesign
{
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;
}

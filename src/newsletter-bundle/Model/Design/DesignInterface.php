<?php

namespace NewslettersBundle\Model\Design;

use NewslettersBundle\Model\Mandant\MandantInterface;
use NewslettersBundle\Renderer\RenderableInterface;

interface DesignInterface extends RenderableInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return MandantInterface
     */
    public function getMandant();

    /**
     * @param MandantInterface $mandant
     */
    public function setMandant(MandantInterface $mandant);

    
    /**
     * @return string
     */
    public function __toString();
}

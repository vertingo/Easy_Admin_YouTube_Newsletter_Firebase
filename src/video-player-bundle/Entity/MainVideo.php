<?php

namespace VideoPlayerBundle\Entity;

use VideoPlayerBundle\Entity\Video as BaseVideo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 */
class MainVideo extends BaseVideo
{
    /**
     * @var int
     */
    protected $id;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
}

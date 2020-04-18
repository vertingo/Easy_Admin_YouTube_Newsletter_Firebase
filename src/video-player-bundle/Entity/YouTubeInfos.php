<?php

namespace VideoPlayerBundle\Entity;

/**
 * YouTubeInfos
 */
class YouTubeInfos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idyoutube;

    /**
     * @var string
     */
    private $titleyoutube;

    /**
     * @var int
     */
    private $subscribercount;

    /**
     * @var int
     */
    private $viewcount;

    /**
     * @var int
     */
    private $videocount;

    /**
     * @var string
     */
    private $channeldescription;

    /**
     * @var string
     */
    private $customurl;

    /**
     * @var string
     */
    private $username;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idyoutube.
     *
     * @param int $idyoutube
     *
     * @return YouTubeInfos
     */
    public function setIdyoutube($idyoutube)
    {
        $this->idyoutube = $idyoutube;

        return $this;
    }

    /**
     * Get idyoutube.
     *
     * @return int
     */
    public function getIdyoutube()
    {
        return $this->idyoutube;
    }

    /**
     * Set titleyoutube.
     *
     * @param string $titleyoutube
     *
     * @return YouTubeInfos
     */
    public function setTitleyoutube($titleyoutube)
    {
        $this->titleyoutube = $titleyoutube;

        return $this;
    }

    /**
     * Get titleyoutube.
     *
     * @return string
     */
    public function getTitleyoutube()
    {
        return $this->titleyoutube;
    }

    /**
     * Set subscribercount.
     *
     * @param int $subscribercount
     *
     * @return YouTubeInfos
     */
    public function setSubscribercount($subscribercount)
    {
        $this->subscribercount = $subscribercount;

        return $this;
    }

    /**
     * Get subscribercount.
     *
     * @return int
     */
    public function getSubscribercount()
    {
        return $this->subscribercount;
    }

    /**
     * Set viewcount.
     *
     * @param int $viewcount
     *
     * @return YouTubeInfos
     */
    public function setViewcount($viewcount)
    {
        $this->viewcount = $viewcount;

        return $this;
    }

    /**
     * Get viewcount.
     *
     * @return int
     */
    public function getViewcount()
    {
        return $this->viewcount;
    }

    /**
     * Set videocount.
     *
     * @param int $videocount
     *
     * @return YouTubeInfos
     */
    public function setVideocount($videocount)
    {
        $this->videocount = $videocount;

        return $this;
    }

    /**
     * Get videocount.
     *
     * @return int
     */
    public function getVideocount()
    {
        return $this->videocount;
    }

    /**
     * Set channeldescription.
     *
     * @param string $channeldescription
     *
     * @return YouTubeInfos
     */
    public function setChanneldescription($channeldescription)
    {
        $this->channeldescription = $channeldescription;

        return $this;
    }

    /**
     * Get channeldescription.
     *
     * @return string
     */
    public function getChanneldescription()
    {
        return $this->channeldescription;
    }

    /**
     * Set customurl.
     *
     * @param string $customurl
     *
     * @return YouTubeInfos
     */
    public function setCustomurl($customurl)
    {
        $this->customurl = $customurl;

        return $this;
    }

    /**
     * Get customurl.
     *
     * @return string
     */
    public function getCustomurl()
    {
        return $this->customurl;
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return YouTubeInfos
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}

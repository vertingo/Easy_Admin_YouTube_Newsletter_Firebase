<?php

namespace VideoPlayerBundle\Entity;

/**
 * PlayListYouTube
 */
class PlayListYouTube
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $playlistid;

    /**
     * @var string
     */
    private $playlisttitle;
    
    /**
     * @var string
     */
    private $playlistthumbnails;

    /**
     * @var string
     */
    private $playlistusername;

    /**
     * @var bool
     */
    private $enabled;



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
     * Set playlistid.
     *
     * @param int $playlistid
     *
     * @return PlayListYouTube
     */
    public function setPlaylistid($playlistid)
    {
        $this->playlistid = $playlistid;

        return $this;
    }

    /**
     * Get playlistid.
     *
     * @return int
     */
    public function getPlaylistid()
    {
        return $this->playlistid;
    }

    /**
     * Set playlisttitle.
     *
     * @param string $playlisttitle
     *
     * @return PlayListYouTube
     */
    public function setPlaylisttitle($playlisttitle)
    {
        $this->playlisttitle = $playlisttitle;

        return $this;
    }

    /**
     * Get playlisttitle.
     *
     * @return string
     */
    public function getPlaylisttitle()
    {
        return $this->playlisttitle;
    }

    /**
     * Set playlistthumbnails.
     *
     * @param string $playlistthumbnails
     *
     * @return PlayListYouTube
     */
    public function setPlaylistthumbnails($playlistthumbnails)
    {
        $this->playlistthumbnails = $playlistthumbnails;

        return $this;
    }

    /**
     * Get playlistthumbnails.
     *
     * @return string
     */
    public function getPlaylistthumbnails()
    {
        return $this->playlistthumbnails;
    }

 /**
     * Set playlistusername.
     *
     * @param int $playlistusername
     *
     * @return PlayListYouTube
     */
    public function setPlaylistusername($playlistusername)
    {
        $this->playlistusername = $playlistusername;

        return $this;
    }

     /**
     * Get playlistusername.
     *
     * @return string
     */
    public function getPlaylistusername()
    {
        return $this->playlistusername;
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
}

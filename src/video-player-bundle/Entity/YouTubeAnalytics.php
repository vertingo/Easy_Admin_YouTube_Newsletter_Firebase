<?php

namespace VideoPlayerBundle\Entity;

/**
 * YouTubeAnalytics
 */
class YouTubeAnalytics
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $day;

    /**
     * @var int
     */
    private $views;

    /**
     * @var int
     */
    private $estimatedMinutesWatched;

    /**
     * @var int
     */
    private $averageViewDuration;

    /**
     * @var float
     */
    private $averageViewPercentage;

    /**
     * @var int
     */
    private $subscribersGained;

    /**
     * @var int
     */
    private $likes;

    /**
     * @var int
     */
    private $dislikes;

    /**
     * @var int
     */
    private $shares;


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
     * Set day.
     *
     * @param string $day
     *
     * @return YouTubeAnalytics
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day.
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set views.
     *
     * @param int $views
     *
     * @return YouTubeAnalytics
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views.
     *
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set estimatedMinutesWatched.
     *
     * @param int $estimatedMinutesWatched
     *
     * @return YouTubeAnalytics
     */
    public function setEstimatedMinutesWatched($estimatedMinutesWatched)
    {
        $this->estimatedMinutesWatched = $estimatedMinutesWatched;

        return $this;
    }

    /**
     * Get estimatedMinutesWatched.
     *
     * @return int
     */
    public function getEstimatedMinutesWatched()
    {
        return $this->estimatedMinutesWatched;
    }

    /**
     * Set averageViewDuration.
     *
     * @param int $averageViewDuration
     *
     * @return YouTubeAnalytics
     */
    public function setAverageViewDuration($averageViewDuration)
    {
        $this->averageViewDuration = $averageViewDuration;

        return $this;
    }

    /**
     * Get averageViewDuration.
     *
     * @return int
     */
    public function getAverageViewDuration()
    {
        return $this->averageViewDuration;
    }

    /**
     * Set averageViewPercentage.
     *
     * @param float $averageViewPercentage
     *
     * @return YouTubeAnalytics
     */
    public function setAverageViewPercentage($averageViewPercentage)
    {
        $this->averageViewPercentage = $averageViewPercentage;

        return $this;
    }

    /**
     * Get averageViewPercentage.
     *
     * @return float
     */
    public function getAverageViewPercentage()
    {
        return $this->averageViewPercentage;
    }

    /**
     * Set subscribersGained.
     *
     * @param int $subscribersGained
     *
     * @return YouTubeAnalytics
     */
    public function setSubscribersGained($subscribersGained)
    {
        $this->subscribersGained = $subscribersGained;

        return $this;
    }

    /**
     * Get subscribersGained.
     *
     * @return int
     */
    public function getSubscribersGained()
    {
        return $this->subscribersGained;
    }

    /**
     * Set likes.
     *
     * @param int $likes
     *
     * @return YouTubeAnalytics
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes.
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set dislikes.
     *
     * @param int $dislikes
     *
     * @return YouTubeAnalytics
     */
    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;

        return $this;
    }

    /**
     * Get dislikes.
     *
     * @return int
     */
    public function getDislikes()
    {
        return $this->dislikes;
    }

    /**
     * Set shares.
     *
     * @param int $shares
     *
     * @return YouTubeAnalytics
     */
    public function setShares($shares)
    {
        $this->shares = $shares;

        return $this;
    }

    /**
     * Get shares.
     *
     * @return int
     */
    public function getShares()
    {
        return $this->shares;
    }
}

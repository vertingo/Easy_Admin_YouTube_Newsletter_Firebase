<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FootballAPI
 *
 * @ORM\Table(name="football_api")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FootballAPIRepository")
 */
class FootballAPI
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="championnat_favori", type="array", length=255, nullable=true)
     */
    private $championnatFavori;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joueur_favori", type="array", length=255, nullable=true)
     */
    private $joueurFavori;

    /**
     * @var string|null
     *
     * @ORM\Column(name="club_favori", type="array", length=255, nullable=true)
     */
    private $clubFavori;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false, unique=true)
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
     * Set championnatFavori.
     *
     * @param string|null $championnatFavori
     *
     * @return FootballAPI
     */
    public function setChampionnatFavori($championnatFavori = null)
    {
        $this->championnatFavori = $championnatFavori;

        return $this;
    }

    /**
     * Get championnatFavori.
     *
     * @return string|null
     */
    public function getChampionnatFavori()
    {
        return $this->championnatFavori;
    }

    /**
     * Set joueurFavori.
     *
     * @param string|null $joueurFavori
     *
     * @return FootballAPI
     */
    public function setJoueurFavori($joueurFavori = null)
    {
        $this->joueurFavori = $joueurFavori;

        return $this;
    }

    /**
     * Get joueurFavori.
     *
     * @return string|null
     */
    public function getJoueurFavori()
    {
        return $this->joueurFavori;
    }

    /**
     * Set clubFavori.
     *
     * @param string|null $clubFavori
     *
     * @return FootballAPI
     */
    public function setClubFavori($clubFavori = null)
    {
        $this->clubFavori = $clubFavori;

        return $this;
    }

    /**
     * Get clubFavori.
     *
     * @return string|null
     */
    public function getClubFavori()
    {
        return $this->clubFavori;
    }

     /**
     * Set username.
     *
     * @param string $username
     *
     * @return GcmUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return int
     */
    public function getUsername()
    {
        return $this->username;
    }
}

<?php

// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use NewslettersBundle\Model\User\MandantUserInterface;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements MandantUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @var string $fbid
    *
    * @ORM\Column(name="fbid", type="string", length=255, nullable=true)
    */
    protected $fbid;

    /**
	 * @ORM\Column(type="string", nullable=true)
	 */
	protected $mandant;

    /**
     * {@inheritdoc}
     */
    public function setFbid($fbid)
    {
        $this->fbid = $fbid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFbid()
    {
        return $this->fbid;
    }

    public function setMandant($mandant)
    {
        $this->mandant = $mandant;

        return $this->mandant;
    }


    public function getMandant()
    {
        return $this->mandant;
    }
}

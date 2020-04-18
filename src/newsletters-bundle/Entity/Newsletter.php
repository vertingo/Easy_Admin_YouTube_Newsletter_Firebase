<?php

namespace NewsletterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\ExecutionContextInterface;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="subscriber")
 * @UniqueEntity(fields="email", message="email-already-exists")
 */
class Newsletter {
    
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank()
    * @Assert\Email()
    */
    protected $email;

    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    protected $access_key;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Newsletter
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set access_key
     *
     * @param string $accessKey
     * @return Newsletter
     */
    public function setAccessKey($accessKey)
    {
        $this->access_key = $accessKey;

        return $this;
    }

    /**
     * Get access_key
     *
     * @return string 
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Newsletter
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtToNow()
    {
        $this->setCreatedAt(new DateTime());
    }

    /**
     * @ORM\PrePersist
     */
    public function generateAccessKey()
    {
        $this->setAccessKey(sha1(microtime().rand(1,10000).'fjweojfioweajoawjiofjweoajfweao;'.$this->getEmail()));
    }
}

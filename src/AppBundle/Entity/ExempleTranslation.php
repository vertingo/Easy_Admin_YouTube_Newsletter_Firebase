<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Eko\FeedBundle\Item\Writer\ItemInterface;

/**
 * @ORM\Entity
 */
class ExempleTranslation implements ItemInterface
{
    use ORMBehaviors\Translatable\Translation;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * This method returns feed item title.
     *
     * @abstract
     *
     * @return string
     */
    public function getFeedItemTitle(){
        return $this-> getTitle();
    }

        /**
         * This method returns feed item description (or content).
         *
         * @abstract
         *
         * @return string
         */
        public function getFeedItemDescription(){

            return $this-> getContent();
        }
    
        /**
         * This method returns feed item URL link.
         *
         * @abstract
         *
         * @return string
         */
        public function getFeedItemLink(){}
        
            /**
         * This method returns item publication date.
         *
         * @abstract
         *
         * @return \DateTime
         */
        public function getFeedItemPubDate(){}
}

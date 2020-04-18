<?php

namespace NewslettersBundle\Model\Block;

use NewslettersBundle\Model\Newsletter\NewsletterInterface;
use NewslettersBundle\Renderer\RenderableInterface;

interface BlockInterface extends RenderableInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param int $position
     */
    public function setPosition($position);

    /**
     * @return string
     */
    public function getProviderName();

    /**
     * @param string $providerName
     */
    public function setProviderName($providerName);

    /**
     * @return array
     */
    public function getProviderOptions();

    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public function getProviderOption($key, $default = null);

    /**
     * @param array $options
     */
    public function setProviderOptions(array $options);

    /**
     * @param string $key
     * @param string $value
     */
    public function setProviderOption($key, $value);

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function setParentBlock(BlockInterface $block = null);

    /**
     * @return BlockInterface
     */
    public function getParentBlock();

    /**
     * @return boolean
     */
    public function isCompound();

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function addBlock(BlockInterface $block);

    /**
     * @param  BlockInterface $block
     * @return BlockInterface
     */
    public function removeBlock(BlockInterface $block);

    /**
     * @return BlockInterface[]
     */
    public function getBlocks();

    /**
     * @param BlockInterface[] $blocks
     */
    public function setBlocks(array $blocks);

    /**
     * @param BlockInterface[] $blocks
     */
    public function addBlocks(array $blocks);

    /**
     * @param string $content
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @return NewsletterInterface
     */
    public function getNewsletter();

    /**
     * @param NewsletterInterface $newsletter
     */
    public function setNewsletter(NewsletterInterface $newsletter = null);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param  string $name
     * @return BlockInterface
     */
    public function setName($name);
}

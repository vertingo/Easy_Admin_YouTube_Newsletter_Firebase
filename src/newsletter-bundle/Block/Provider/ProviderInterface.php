<?php

namespace NewslettersBundle\Block\Provider;

use NewslettersBundle\Model\Block\BlockInterface;
use NewslettersBundle\Service\BlockProviderManager;

interface ProviderInterface
{
    public function getOptionKeys();

    public function setBlockProviderManager(BlockProviderManager $blockProviderManager);

    public function initialize(BlockInterface $block, $blockClassName);
    public function updateBlock(BlockInterface $block, $update);
    public function updateClonedBlock(BlockInterface $block);

    public function getBlockDisplayContent(BlockInterface $block);
    public function getBlockEditContent(BlockInterface $block);
}

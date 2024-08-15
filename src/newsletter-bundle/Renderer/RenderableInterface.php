<?php

namespace NewslettersBundle\Renderer;

interface RenderableInterface
{
    /**
     * @return string
     */
    public function getContent();
}

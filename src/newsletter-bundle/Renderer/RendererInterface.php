<?php

namespace NewslettersBundle\Renderer;

interface RendererInterface
{
    public function render(RenderableInterface $element, array $parameters = array());
}

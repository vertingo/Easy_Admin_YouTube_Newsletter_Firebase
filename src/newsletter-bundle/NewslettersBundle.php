<?php

namespace NewslettersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NewslettersBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new BlockProviderCompilerPass());
        $container->addCompilerPass(new RendererCompilerPass());
        $container->addCompilerPass(new MailerServiceCompilerPass());
    }
}

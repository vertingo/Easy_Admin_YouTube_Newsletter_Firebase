<?php

namespace NewslettersBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class MailerServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('newsletters.mailer');

        $encryptionServiceId = $container->getParameter('newsletters.serviceid.encryptionadapter');
        $definition->addArgument(new Reference($encryptionServiceId));
    }
}

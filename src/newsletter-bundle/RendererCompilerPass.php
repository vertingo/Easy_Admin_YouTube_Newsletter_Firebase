<?php

namespace NewslettersBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class RendererCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // add all tagged renderers
        if (!$container->hasDefinition('newsletters.renderer_manager')) {
            return;
        }

        $definition = $container->getDefinition(
            'newsletters.renderer_manager'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'newsletters.renderer'
        );

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'addRenderer',
                array($id, new Reference($id))
            );
        }

        // set correct gendertitle strategy
        if (!$container->hasDefinition('newsletters.rendererbridge')) {
            return;
        }

        $definition = $container->getDefinition(
            'newsletters.rendererbridge'
        );

        $genderTitleStrategyServiceId = $container->getParameter('newsletters.serviceid.gendertitlestrategy');
        $definition->addArgument(new Reference($genderTitleStrategyServiceId));
    }
}

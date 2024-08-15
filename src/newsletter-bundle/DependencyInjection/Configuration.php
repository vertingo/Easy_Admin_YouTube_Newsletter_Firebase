<?php

namespace NewslettersBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('newsletter');

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('db_driver')->defaultValue('orm')->end()
            ->end()
        ;

        $this->addMandantSection($rootNode);
        $this->addTemplatesSection($rootNode);
        $this->addClassesSection($rootNode);
        $this->addRendererBridgeSection($rootNode);
        $this->addFilesystemSection($rootNode);
        $this->addServiceIdSection($rootNode);

        return $treeBuilder;
    }

    protected function addMandantSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('mandants')
                    ->isRequired()
                    ->requiresAtLeastOneElement()
                    ->useAttributeAsKey('name')
                    ->prototype('scalar')
                ->end()
            ->end()
        ;

    }

    protected function addTemplatesSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()

                ->arrayNode('templates')
                    ->addDefaultsIfNotSet()
                    ->children()

                        ->scalarNode('base_template')->defaultValue('NewslettersBundle::layout.html.twig')->end()

                        ->arrayNode('mandant')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('index')->defaultValue('NewslettersBundle:Mandant:index.html.twig')->end()
                                ->scalarNode('edit')->defaultValue('NewslettersBundle:Mandant:edit.html.twig')->end()
                            ->end()
                        ->end()

                        ->arrayNode('newsletter')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('index')->defaultValue('NewslettersBundle:Newsletter:index.html.twig')->end()
                                ->scalarNode('list')->defaultValue('NewslettersBundle:Newsletter:list.html.twig')->end()
                                ->scalarNode('create')->defaultValue('NewslettersBundle:Newsletter:create.html.twig')->end()
                                ->scalarNode('edit')->defaultValue('NewslettersBundle:Newsletter:edit.html.twig')->end()
                                ->scalarNode('subscriber')->defaultValue('NewslettersBundle:Newsletter:subscriber.html.twig')->end()
                                ->scalarNode('settings')->defaultValue('NewslettersBundle:Newsletter:settings.html.twig')->end()
                                ->scalarNode('summary')->defaultValue('NewslettersBundle:Newsletter:summary.html.twig')->end()
                                ->scalarNode('send')->defaultValue('NewslettersBundle:Newsletter:send.html.twig')->end()
                                ->scalarNode('unsubscribe')->defaultValue('NewslettersBundle:Newsletter:unsubscribe.html.twig')->end()
                                ->scalarNode('overview')->defaultValue('NewslettersBundle:Newsletter:overview.html.twig')->end()
                                ->scalarNode('generate')->defaultValue('NewslettersBundle:Newsletter:generate.html.twig')->end()
                            ->end()
                        ->end()

                        ->arrayNode('design')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('index')->defaultValue('NewslettersBundle:Design:index.html.twig')->end()
                                ->scalarNode('list')->defaultValue('NewslettersBundle:Design:list.html.twig')->end()
                                ->scalarNode('create')->defaultValue('NewslettersBundle:Design:create.html.twig')->end()
                                ->scalarNode('edit')->defaultValue('NewslettersBundle:Design:edit.html.twig')->end()
                                ->scalarNode('show')->defaultValue('NewslettersBundle:Design:show.html.twig')->end()
                            ->end()
                        ->end()

                        ->arrayNode('subscriber')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('list')->defaultValue('NewslettersBundle:Subscriber:list.html.twig')->end()
                            ->end()
                        ->end()

                        ->arrayNode('statistic')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('show')->defaultValue('NewslettersBundle:Statistic:show.html.twig')->end()
                            ->end()
                        ->end()

                ->end()
            ->end()
        ;
    }

    protected function addClassesSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('classes')->children()

                    ->arrayNode('model')
                            ->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('newsletter')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('mandant')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('subscriber')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('design')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('user')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('block')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('group')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('readlog')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('unsubscribelog')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('sendlog')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('sendsettings')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('mailjob')->isRequired()->cannotBeEmpty()->end()
                        ->end()
                    ->end()

                    ->arrayNode('form')
                        ->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('newsletter')->defaultValue('NewslettersBundle\\Form\\NewsletterType')->end()
                            ->scalarNode('mandant')->defaultValue('NewslettersBundle\\Form\\MandantType')->end()
                            ->scalarNode('subscriber')->defaultValue('NewslettersBundle\\Form\\SubscriberType')->end()
                            ->scalarNode('design')->defaultValue('NewslettersBundle\\Form\\DesignType')->end()
                            ->scalarNode('testmail')->cannotBeOverwritten(true)->defaultValue('NewslettersBundle\\Form\\TestMailType')->end()
                            ->scalarNode('unsubscribe')->defaultValue('NewslettersBundle\\Form\\UnsubscribeType')->end()
                            ->scalarNode('sendsettings')->defaultValue('NewslettersBundle\\Form\\SendSettingsType')->end()
                        ->end()
                    ->end()

                ->end()
            ->end()
        ;
    }

    protected function addFilesystemSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()

                ->arrayNode('filesystem')->children()
                    ->arrayNode('block')
                        ->children()
                            ->scalarNode('directory')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('public')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('host')->isRequired()->cannotBeEmpty()->end()
                        ->end()
                    ->end()
                ->end()

            ->end()
        ;
    }

    protected function addRendererBridgeSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()

                ->arrayNode('rendererbridge')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('class')->defaultValue('NewslettersBundle\\Renderer\\Bridge\\RendererBridge')->end()
                    ->end()
                ->end()

                ->arrayNode('gendertitlestrategy')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('class')->defaultValue('NewslettersBundle\\Renderer\\GenderTitleStrategy\\GenderTitleTranslatorStrategy')->end()
                        ->arrayNode('translator')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('translationdomain')->defaultValue('NewslettersBundle')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()

            ->end()
        ;
    }

    protected function addServiceIdSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('serviceid')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('rendererbridge')->defaultValue('newsletters.rendererbridge')->end()
                        ->scalarNode('gendertitlestrategy')->defaultValue('newsletters.rendererbridge.gendertitlestrategy.translator')->end()
                        ->scalarNode('encryptionadapter')->defaultValue('newsletters.encryption.adapter.mcrypt')->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}

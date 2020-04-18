<?php

namespace AppBundle\Event\Listener;

use AppBundle\Entity\Exemple;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Service\UrlContainerInterface;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Presta\SitemapBundle\Sitemap\Url as Sitemap;



class SitemapSubscriber implements EventSubscriberInterface
{
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @var ManagerRegistry
     */
    private $doctrine;

   
    /**
     * @param UrlGeneratorInterface $urlGenerator
     * @param ManagerRegistry       $doctrine
     */
    public function __construct(UrlGeneratorInterface $urlGenerator, ManagerRegistry $doctrine)
    {
        $this->urlGenerator = $urlGenerator;
        $this->doctrine = $doctrine;
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            SitemapPopulateEvent::ON_SITEMAP_POPULATE => 'populate',
        ];
    }

    /**
     * @param SitemapPopulateEvent $event
     */
    public function populate(SitemapPopulateEvent $event): void
    {
        $this->registerSitemapUrls($event->getUrlContainer());
    }

    /**
     * @param UrlContainerInterface $urls
     */
    public function registerSitemapUrls(UrlContainerInterface $urls): void
    {


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('feed'));
        $decoratedUrl = new Sitemap\GoogleNewsUrlDecorator(
            $url,
            'Flux Rss VertinGo Production',
            'fr',
            new \DateTime('2018-02-13'),
            'The source Rss of VertinGo Production'
            );
        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'default');


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('front_bundle_file_manager'));
        $urls->addUrl($url, 'default');


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('youwe_file_manager_list'));
        $urls->addUrl($url, 'default');


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('liste_medias'));
        $urls->addUrl($url, 'default');


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('file_manager'));
        $urls->addUrl($url, 'default');


        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('listplaylist'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/vertin-go-website/sussex_computing.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/mbr4th-horizontal.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/slider.jpg'));

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('infosblock'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/deploiement-et-apk/android_studio.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/calcul-integral/calcul-integral.png'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/symfony/symfony.jpg'));

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('intro'));

        $decoratedUrl2 = new Sitemap\GoogleVideoUrlDecorator(
            $url,
            'https://img.youtube.com/vi/j6IKRxH8PTg/0.jpg',
            '',
            'In this video you will learn how to start a Symfony projects',
            ['content_loc' => 'https://www.youtube.com/watch?v=lQoa-aeWTnQ']
            );
            $decoratedUrl2->addTag('php')
            ->addTag('calcul integral')
            ->addTag('math');

        $urls->addUrl($decoratedUrl2, 'video');
        $urls->addUrl($url, 'default');
        

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('sliders'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/1.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/youtube-api/YoutubeDataApiV3.png'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/youtube-api/app-store.jpg'));

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('listplaylist'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/vertin-go-website/sussex_computing.jpg'));

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('socialblocks'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/intro-1.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/images-video.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/slider.jpg'));

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');

        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('imagesvideos'));
        $decoratedUrl = new Sitemap\GoogleImageUrlDecorator($url);
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/mbr-1.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/04.jpg'));
        $decoratedUrl->addImage(new Sitemap\GoogleImage('/assets/images/05.jpg'));

        $decoratedUrl2 = new Sitemap\GoogleVideoUrlDecorator(
            $url,
            'https://img.youtube.com/vi/j6IKRxH8PTg/0.jpg',
            'How to begin with Symfony 2.6',
            'In this video you will learn how to start a Symfony projects',
            ['content_loc' => 'https://www.youtube.com/watch?v=v7uCji-WhjY&t']
            );
            $decoratedUrl2->addTag('php')
            ->addTag('symfony')
            ->addTag('sitemap');

        $urls->addUrl($url, 'default');
        $urls->addUrl($decoratedUrl, 'image');
        $urls->addUrl($decoratedUrl2, 'video');
    
        $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('sonata_media_gallery_index'));
        $decoratedUrl = new Sitemap\GoogleVideoUrlDecorator(
        $url,
        'https://img.youtube.com/vi/j6IKRxH8PTg/0.jpg',
        'How to use to begin with Symfony 2.6 [1/2]',
        'In this video you will learn how to start a Symfony projects',
        ['content_loc' => 'https://www.youtube.com/watch?v=v7uCji-WhjY&t']
        );
        $decoratedUrl->addTag('php')
        ->addTag('symfony')
        ->addTag('sitemap');

        $urls->addUrl($decoratedUrl, 'video');


        /*  $url = new Sitemap\UrlConcrete($this->urlGenerator->generate('fos_user'));
        $decoratedUrl = new Sitemap\GoogleNewsUrlDecorator(
        $url,
        'Interface of sign-up, sign-in, and check email',
        'fr',
        new \DateTime('2018-02-13'),
        'Route of the Fosuser Bundle'
        );
        $urls->addUrl($decoratedUrl, 'default');

        
        $posts = $this->doctrine->getRepository('AppBundle:Exemple')->findAll();

        foreach ($posts as $post) {
            $urls->addUrl(
                new UrlConcrete(
                    $this->urlGenerator->generate(
                        'front_bundle_file_manager',
                        ['route' => $post->getMediaCollection()],
                        UrlGeneratorInterface::ABSOLUTE_URL
                    )
                ),
                'list_content_formation_vertin_go_website'
            );
        }*/
    }
}
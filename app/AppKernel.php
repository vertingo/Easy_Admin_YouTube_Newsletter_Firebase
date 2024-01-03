<?php
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new FcmBundle\RedjanYmFCMBundle(),
            new FileManagerBundle\FileManagerBundle(),
            new VideoPlayerBundle\VideoPlayerBundle(),
            new JavierEguiluz\Bundle\EasyAdminBundle\EasyAdminBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Knp\DoctrineBehaviors\Bundle\DoctrineBehaviorsBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),
            new Arkounay\BlockI18nBundle\ArkounayBlockI18nBundle(),
            new Gregwar\ImageBundle\GregwarImageBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
            new Petkopara\MultiSearchBundle\PetkoparaMultiSearchBundle(),
            new Eko\FeedBundle\EkoFeedBundle(),
            new \MartinGeorgiev\SocialPostBundle\SocialPostBundle(),
            new Symfony\Cmf\Bundle\MediaBundle\CmfMediaBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Youwe\FileManagerBundle\YouweFileManagerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new Presta\SitemapBundle\PrestaSitemapBundle(),
            new Sonata\SeoBundle\SonataSeoBundle(),
            new Symfony\Cmf\Bundle\SeoBundle\CmfSeoBundle(),
            new Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Bnbc\UploadBundle\BnbcUploadBundle(),
            new Oneup\UploaderBundle\OneupUploaderBundle(),
            new Dubture\FFmpegBundle\DubtureFFmpegBundle(),
            new FfmpegBundle\PhpFFmpegBundle(),
            new NewsletterBundle\NewsletterBundle(),
            new NewslettersBundle\NewslettersBundle(),
            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            //new Petkopara\CrudGeneratorBundle\PetkoparaCrudGeneratorBundle(),
            //new Artgris\Bundle\MediaBundle\ArtgrisMediaBundle(),
            //new EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle(),
            //new Artgris\Bundle\FileManagerBundle\ArtgrisFileManagerBundle(),
            //new Novactive\Bundle\eZSEOBundle\NovaeZSEOBundle(),
            //new Ibrows\Bundle\NewsletterBundle\IbrowsNewsletterBundle(),
            //new sujayjaju\FFmpegBundle\PhpFFmpegBundle(),
            //new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            //new Sonata\ClassificationBundle\SonataClassificationBundle(),
            //new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();

              if ('dev' === $this->getEnvironment()) {
                $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
                $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
            }
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}

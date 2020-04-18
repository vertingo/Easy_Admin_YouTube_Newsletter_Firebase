<?php

namespace NewslettersBundle\Renderer\Bridge;

use NewslettersBundle\Model\Mandant\MandantInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;
use NewslettersBundle\Model\Subscriber\SubscriberGenderTitleInterface;
use NewslettersBundle\Model\Subscriber\SubscriberInterface;
use NewslettersBundle\Renderer\GenderTitleStrategy\GenderTitleStrategyInterface;
use Symfony\Component\Routing\RouterInterface;

class RendererBridge
{
    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @var GenderTitleStrategyInterface
     */
    protected $genderTitleStrategy;

    /**
     * @var string
     */
    private $host;

    /**
     * @param RouterInterface $router
     * @param GenderTitleStrategyInterface $genderTitleStrategy
     * @param string $host
     */
    public function __construct(
        RouterInterface $router,
        GenderTitleStrategyInterface $genderTitleStrategy,
        $host
    ) {
        $this->router = $router;
        $this->genderTitleStrategy = $genderTitleStrategy;
        $this->host = $host;
    }

    /**
     * @param  string $format
     * @return string
     */
    public function now($format = 'd.m.Y')
    {
        $now = new \DateTime();

        return $now->format($format);
    }

    /**
     * @param  MandantInterface $mandant
     * @param  NewsletterInterface $newsletter
     * @param  SubscriberInterface $subscriber
     * @param  string $context
     * @return string
     */
    public function statisticlogreadimage(
        MandantInterface $mandant,
        NewsletterInterface $newsletter,
        SubscriberInterface $subscriber,
        $context
    ) {
        $src = $this->router->generate(
            'newsletters_statistic_log_read',
            array(
                'mandantHash' => $mandant->getHash(),
                'newsletterHash' => $newsletter->getHash(),
                'subscriberHash' => $subscriber->getHash(),
                'context' => $context,
            ),
            RouterInterface::ABSOLUTE_PATH
        );

        return '<img width="0" height="0" src="'.$this->host.$src.'" />';
    }

    /**
     * @param  MandantInterface $mandant
     * @param  NewsletterInterface $newsletter
     * @param  SubscriberInterface $subscriber
     * @param                      $context
     * @return string
     */
    public function readonlinelink(
        MandantInterface $mandant,
        NewsletterInterface $newsletter,
        SubscriberInterface $subscriber,
        $context
    ) {
        return $this->host.$this->router->generate(
            'newsletters_render_overview',
            array(
                'mandantHash' => $mandant->getHash(),
                'newsletterHash' => $newsletter->getHash(),
                'subscriberHash' => $subscriber->getHash(),
                'context' => $context,
            ),
            RouterInterface::ABSOLUTE_PATH
        );
    }

    /**
     * @param  MandantInterface $mandant
     * @param  NewsletterInterface $newsletter
     * @param  SubscriberInterface $subscriber
     * @param                      $context
     * @return string
     */
    public function unsubscribelink(
        MandantInterface $mandant,
        NewsletterInterface $newsletter,
        SubscriberInterface $subscriber,
        $context
    ) {
        return $this->host.$this->router->generate(
            'newsletters_unsubscribe',
            array(
                'mandantHash' => $mandant->getHash(),
                'newsletterHash' => $newsletter->getHash(),
                'subscriberHash' => $subscriber->getHash(),
                'context' => $context,
            ),
            RouterInterface::ABSOLUTE_PATH
        );
    }

    /**
     * @param  SubscriberGenderTitleInterface|SubscriberInterface $subscriber
     * @return string
     */
    public function gendertitle(SubscriberInterface $subscriber)
    {
        return $this->genderTitleStrategy->getGenderTitle($subscriber);
    }
}

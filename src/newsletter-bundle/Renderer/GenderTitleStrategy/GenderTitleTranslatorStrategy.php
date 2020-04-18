<?php

namespace NewslettersBundle\Renderer\GenderTitleStrategy;

use NewslettersBundle\Model\Subscriber\SubscriberGenderTitleInterface;
use NewslettersBundle\Model\Subscriber\SubscriberLocaleInterface;

use Symfony\Component\Translation\TranslatorInterface;

class GenderTitleTranslatorStrategy implements GenderTitleStrategyInterface
{
    protected $translator;
    protected $translationDomain;
    protected $translationParameters;

    public function __construct(
        TranslatorInterface $translator,
        $translationDomain,
        array $translationParameters = array()
    ) {
        $this->translator = $translator;
        $this->translationDomain = $translationDomain;
        $this->translationParameters = $translationParameters;
    }

    /**
     * @param  SubscriberGenderTitleInterface $subscriber
     * @return string
     */
    public function getGenderTitle(SubscriberGenderTitleInterface $subscriber)
    {
        $parameters = array();
        foreach ($this->translationParameters as $key => $methodName) {
            $parameters['%subscriber.'.$key.'%'] =
                $subscriber->$methodName();
        }

        $locale = ($subscriber instanceof SubscriberLocaleInterface) ? $subscriber->getLocale() : null;

        return
            $this->translator->trans(
                'newsletter.gendertitle.'.$subscriber->getGender().'.'.$subscriber->getTitle(),
                $parameters,
                $this->translationDomain,
                $locale
            );
    }
}

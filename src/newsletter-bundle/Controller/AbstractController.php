<?php

namespace NewslettersBundle\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use NewslettersBundle\Annotation\Wizard\AnnotationHandler as WizardActionAnnotationHandler;
use NewslettersBundle\Encryption\EncryptionInterface;
use NewslettersBundle\Model\Block\BlockInterface;
use NewslettersBundle\Model\Mandant\MandantInterface;
use NewslettersBundle\Model\Newsletter\NewsletterInterface;
use NewslettersBundle\Model\Newsletter\SendSettingsInterface;
use NewslettersBundle\Model\Statistic\StatisticManager;
use NewslettersBundle\Model\Subscriber\SubscriberInterface;
use NewslettersBundle\Model\User\MandantUserInterface;
use NewslettersBundle\Renderer\Bridge\BridgeMethodsHelper;
use NewslettersBundle\Renderer\Bridge\RendererBridge;
use NewslettersBundle\Service\BlockProviderManager;
use NewslettersBundle\Service\ClassManager;
use NewslettersBundle\Service\orm\DesignManager;
use NewslettersBundle\Service\orm\MandantManager;
use NewslettersBundle\Service\orm\NewsletterManager;
use NewslettersBundle\Service\RendererManager;
use NewslettersBundle\Service\TemplateManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

abstract class AbstractController extends Controller
{
    /**
     * @param string
     * @return mixed
     */
    protected function getParameter($name)
    {
        return $this->container->getParameter($name);
    }

    /**
     * @return RendererBridge
     */
    protected function getRendererBridge()
    {
        return $this->get($this->getParameter('newsletters.serviceid.rendererbridge'));
    }

    /**
     * @return EncryptionInterface
     */
    protected function getEncryptionService()
    {
        return $this->get($this->getParameter('newsletters.serviceid.encryptionadapter'));
    }

    /**
     * @param NewsletterInterface $newsletter
     * @param SubscriberInterface $subscriber
     * @param                     $message
     */
    protected function addNewsletterReadLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        $this->getStatisticManager()->addNewsletterReadLog($newsletter, $subscriber, $message);
    }

    /**
     * @param NewsletterInterface $newsletter
     * @param SubscriberInterface $subscriber
     * @param                     $message
     */
    protected function addNewsletterSendLog(NewsletterInterface $newsletter, SubscriberInterface $subscriber, $message)
    {
        $this->getStatisticManager()->addNewsletterSendLog($newsletter, $subscriber, $message);
    }

    protected function getMandantNameByHash($hash)
    {
        foreach ($this->getParameter('newsletters.mandants') as $mandantName => $mandantHash) {
            if ($hash == $mandantHash) {
                return $mandantName;
            }
        }

        throw new InvalidConfigurationException("Update configuration with mandanthash '$hash'");
    }

    /**
     * @return MandantManager
     */
    protected function getMandantManager()
    {
        return $this->get('newsletters.mandant_manager');
    }

    /**
     * @return ObjectManager
     */
    protected function getObjectManager()
    {
        return $this->getMandantManager()->getObjectManager($this->getMandantName());
    }

    /**
     * @return StatisticManager
     */
    protected function getStatisticManager()
    {
        return $this->getMandantManager()->getStatisticManager($this->getMandantName());
    }

    /**
     * @return Session
     */
    protected function getSession()
    {
        return $this->get('session');
    }

    /**
     * @return BridgeMethodsHelper
     */
    protected function getBridgeMethodsHelper()
    {
        return $this->get('newsletters.rendererbridge.methodshelper');
    }

    /**
     * @return string
     * @throws InvalidConfigurationException
     */
    protected function getMandantName()
    {
        $user = $this->getUser();

        if (!$user instanceof MandantUserInterface) {
            throw new InvalidConfigurationException('Make sure you are logged in and your user class implements Ibrows\Bundle\NewsletterBundle\Model\User\MandantUserInterface');
        }

        return $user->getMandant();
    }

    /**
     * @return BlockInterface[]
     */
    protected function getBlocks()
    {
        return $this->getMandant()->getBlocks();
    }

    /**
     * @return MandantInterface
     */
    protected function getMandant()
    {
        return $this->getMandantManager()->get($this->getMandantName());
    }

    /**
     * @return TemplateManager
     */
    protected function getTemplateManager()
    {
        return $this->get('newsletters.template_manager');
    }

    /**
     * @return ClassManager
     */
    protected function getClassManager()
    {
        return $this->get('newsletters.class_manager');
    }

    /**
     * @return BlockProviderManager
     */
    protected function getBlockProviderManager()
    {
        return $this->get('newsletters.block_provider_manager');
    }

    /**
     * @return RendererManager
     */
    protected function getRendererManager()
    {
        return $this->get('newsletters.renderer_manager');
    }

    /**
     * @return NewsletterManager
     */
    protected function getNewsletterManager()
    {
        return $this->getMandantManager()->getNewsletterManager($this->getMandantName());
    }

    /**
     * @return DesignManager
     */
    protected function getDesignManager()
    {
        return $this->getMandantManager()->getDesignManager($this->getMandantName());
    }

    /**
     * @return WizardActionAnnotationHandler
     */
    protected function getWizardActionAnnotationHandler()
    {
        return $this->get('newsletters.annotation.wizard.handler');
    }

    /**
     * @return true|Response
     */
    protected function getWizardActionValidation()
    {
        return $this->getWizardActionAnnotationHandler()->getValidation();
    }

    /**
     * @param  NewsletterInterface $newsletter
     * @return AbstractController
     */
    protected function setNewsletter(NewsletterInterface $newsletter = null)
    {
        $session = $this->getSession();

        if (is_null($newsletter)) {
            $session->set('newsletters.wizard.newsletterid', null);

            return $this;
        }

        $mandantName = $this->getMandantName();
        $this->getMandantManager()->persistNewsletter($mandantName, $newsletter);
        $session->set('newsletters.wizard.newsletterid', $newsletter->getId());

        return $this;
    }

    /**
     * @param  NewsletterInterface $newsletter
     * @param  integer             $subscriberId
     * @return SubscriberInterface
     * @throws NotFoundHttpException
     */
    protected function getSubscriberById(NewsletterInterface $newsletter, $subscriberId)
    {
        foreach ($newsletter->getSubscribers() as $newsletterSubscriber) {
            if ($newsletterSubscriber->getId() == $subscriberId) {
                return $newsletterSubscriber;
            }
        }

        throw $this->createNotFoundException("Subscriber $subscriberId not found in newsletter #" . $newsletter->getId());
    }

    /**
     * @param  integer $id
     * @return NewsletterInterface
     * @throws NotFoundHttpException
     */
    protected function getNewsletterById($id)
    {
        $newsletter = $this->getNewsletterManager()->get($id);

        if (!$newsletter) {
            throw $this->createNotFoundException("Newsletter with id $id not found");
        }

        return $newsletter;
    }

    /**
     * @return SubscriberInterface[]
     */
    protected function getSubscribers()
    {
        return $this->getMandant()->getSubscribers();
    }

    /**
     * @param  string $hash
     * @return NewsletterInterface
     * @throws NotFoundHttpException
     */
    protected function getNewsletterByHash($hash)
    {
        $newsletter = $this->getNewsletterManager()->getByHash($hash);

        if (!$newsletter) {
            throw $this->createNotFoundException("Newsletter with hash $hash not found");
        }

        return $newsletter;
    }

    /**
     * @param  NewsletterInterface $newsletter
     * @param  string              $hash
     * @return SubscriberInterface
     * @throws NotFoundHttpException
     */
    protected function getSubscriberByHash(NewsletterInterface $newsletter, $hash)
    {
        $subscriber = null;

        foreach ($newsletter->getSubscribers() as $newsletterSubscriber) {
            if ($newsletterSubscriber->getHash() == $hash) {
                return $newsletterSubscriber;
            }
        }

        throw $this->createNotFoundException("Subscriber with hash $hash not found in newsletter #" . $newsletter->getId());
    }

    /**
     * @return NewsletterInterface
     * @throws NotFoundHttpException
     */
    protected function getNewsletter()
    {
        $newsletterId = $this->getSession()->get('newsletters.wizard.newsletterid', null);

        if (is_null($newsletterId)) {
            return null;
        }

        return $this->getNewsletterById($newsletterId);
    }

    /**
     * @return SendSettingsInterface
     * @throws NotFoundHttpException
     */
    protected function getSendSettings()
    {
        $newsletter = $this->getNewsletter();

        if ($newsletter !== null) {
            return $newsletter->getSendSettings();
        }

        return null;
    }

    /**
     * @param SendSettingsInterface $sendSettings
     * @return $this
     */
    protected function setSendSettings(SendSettingsInterface $sendSettings = null)
    {
        $newsletter = $this->getNewsletter();
        if ($sendSettings !== null) {
            $plainpassword = $sendSettings->getPassword();
            $sendSettings->setPassword($this->encryptPassword($plainpassword));

            // clone sendSetting if newsletter has none assigned
            // in order to always get a different one from the mandant
            if ($newsletter->getSendSettings() === null) {
                $sendSettings = clone($sendSettings);
            }
        }

        $newsletter->setSendSettings($sendSettings);

        $mandantName = $this->getMandantName();
        $this->getMandantManager()->persistNewsletter($mandantName, $newsletter);

        return $this;
    }

    /**
     * @param  string $password
     * @return string
     */
    protected function encryptPassword($password)
    {
        $encryption = $this->getEncryptionService();
        return $encryption->encrypt($password, $this->getMandant()->getSalt());
    }

    /**
     * @param  string $password
     * @return string
     */
    protected function decryptPassword($password)
    {
        $encryption = $this->getEncryptionService();
        return $encryption->decrypt($password, $this->getMandant()->getSalt());
    }

    /**
     * @see Symfony\Bundle\FrameworkBundle\Controller.Controller::render()
     * @param string   $view
     * @param array    $parameters
     * @param Response $response
     * @return Response
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        $basetemplate = $this->getTemplateManager()->getBaseTemplate();
        $parameters = array_merge(
            $parameters,
            array(
                'basetemplate'         => $basetemplate,
                'mandant'              => $this->getMandant(),
                'tinymceCustomButtons' => json_encode($this->getBridgeMethodsHelper()->getMethodDefinitions())
            )
        );

        return $this->container->get('templating')->renderResponse($view, $parameters, $response);
    }
}

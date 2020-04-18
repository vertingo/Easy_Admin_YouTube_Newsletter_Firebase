<?php

namespace NewslettersBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NewslettersBundle\Form\MandantType;
use NewslettersBundle\Form\SendSettingsType;

/**
 * @Route("/mandant")
 */
class MandantController extends AbstractController
{
    /**
     * @Route("/edit", name="ibrows_newsletter_mandant_edit")
     * @param Request $request
     * @return Response
     */
    public function editAction(Request $request)
    {
        $mandant = $this->getMandant();
        $mandantType = $this->getClassManager()->getForm('mandant');
        $mandantForm = $this->createForm(MandantType::class, $mandant);

        $sendSettings = $mandant->getSendSettings();
        if ($sendSettings === null) {
            $sendSettingsClass = $this->getClassManager()->getModel('sendsettings');
            $sendSettings = new $sendSettingsClass();
        }

        $sendSettingsType = $this->getClassManager()->getForm('sendsettings');
        $sendSettingsForm = $this->createForm(SendSettingsType::class, $sendSettings);

        if ($request->getMethod() == 'POST') {
            $mandantForm->handleRequest($request);
            $sendSettingsForm->handleRequest($request);

            if ($mandantForm->isValid() && $sendSettingsForm->isValid()) {
                $om = $this->getObjectManager();
                $sendSettings->setPassword($this->encryptPassword($sendSettings->getPassword()));

                $mandant->setSendSettings($sendSettings);
                $om->persist($sendSettings);
                $om->persist($mandant);
                $om->flush();
            }
        }

        return $this->render(
            $this->getTemplateManager()->getMandant('edit'),
            array(
                'mandant'      => $mandant,
                'mandantForm'  => $mandantForm->createView(),
                'settingsForm' => $sendSettingsForm->createView(),
            )
        );
    }

}

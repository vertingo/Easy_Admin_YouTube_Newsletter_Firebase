<?php

namespace NewsletterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NewsletterBundle\Entity\Newsletter;
use NewsletterBundle\Form\Type\NewsletterType;


class DefaultController extends Controller
{
    public function subscribeAction(Request $request)
    {

        $newsletter = new Newsletter();

        $form = $this->createForm(NewsLetterType::class, $newsletter, array("action" => $this->generateUrl("usn_newsletter_subscribe")));

        if($request->getMethod() == 'POST'){

          $form->handleRequest($request);

          if ($form->isValid()) {

              $em = $this->getDoctrine()->getManager();
              $em->persist($newsletter);
              $em->flush();

              $ok = $this->sendConfirmationEmail(
                $this->container->getParameter('confirmation_email_subject'),
                $this->container->getParameter('newsletter_from_address'),
                $this->container->getParameter('newsletter_from_name'),
                $newsletter->getEmail(),
                $newsletter->getAccessKey());

              if($request->isXmlHttpRequest()) {

                return $this->createAjaxResponse(array("code" => 200, "message" => $this->get('translator')->trans("thank-you-for-your-registration")));

              }
              else return $this->redirect($this->generateUrl('usn_newsletter_complete'));
          }
          elseif($request->isXmlHttpRequest()){
            
            $error = $form['email']->getErrors();
            return $this->createAjaxResponse(array("code" => 403, "message" => $error[0]->getMessage() ));

          }

        }

        return $this->render('NewsletterBundle:Default:subscribe.html.twig', array('form' => $form->createView()));
    }

    public function sendConfirmationEmail($subject, $sender_address, $sender_name, $recipient_address, $access_key) {

      $message = \Swift_Message::newInstance()
          ->setSubject($subject)
          ->setFrom(array($sender_address => $sender_name))
          ->setTo($recipient_address)
          ->setBody(
              $this->renderView(
                  'NewsletterBundle:Default:confirmation_mail.txt.twig',
                  array('access_key' => $access_key)
              )
          );

      if ($this->get('templating')->exists('NewsletterBundle:Default:confirmation_mail.html.twig')){
        
        $message->addPart(
          $this->renderView(
            'NewsletterBundle:Default:confirmation_mail.html.twig',
            array('access_key' => $access_key)
          ),"text/html");

      }

      return $this->get('mailer')->send($message);

    }

    public function completeAction(){

      return $this->render('NewsletterBundle:Default:complete.html.twig');

    }

    public function unsubscribeAction($access_key) {

      $em = $this->getDoctrine()->getManager();
      
      $newsletter = $em
        ->getRepository('NewsletterBundle:Newsletter')
        ->findOneBy(array('access_key' => $access_key));

      if(!$newsletter) throw $this->createNotFoundException($this->get('translator')->trans("page-not-found"));

      return $this->render('NewsletterBundle:Default:unsubscribe.html.twig', array('access_key' => $access_key));

    }

    public function unsubscribeCompleteAction($access_key) {

      $em = $this->getDoctrine()->getManager();
      
      $newsletter = $em
        ->getRepository('NewsletterBundle:Newsletter')
        ->findOneBy(array('access_key' => $access_key));

      if(!$newsletter) throw $this->createNotFoundException($this->get('translator')->trans('page-not-found'));

      $em->remove($newsletter);
      $em->flush();

      return $this->render('NewsletterBundle:Default:unsubscribe_complete.html.twig');

    }

    protected function createAjaxResponse($data) {

      $response = new Response(json_encode($data));
      $response->headers->set('Content-Type', 'application/json');

      return $response;

    }


}

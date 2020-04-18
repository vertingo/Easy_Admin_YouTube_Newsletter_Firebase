<?php

namespace NewsletterBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ReportCommand extends ContainerAwareCommand
{

  protected function configure()
  {
    $this
        ->setName('usn:newsletter:report')
        ->setDescription('Sends an email with the number of subscribers.')
        ->addArgument(
                'to',
                InputArgument::REQUIRED,
                'The email to send the report to.'
            )
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {

    $em = $this->getContainer()->get('doctrine')->getEntityManager('default');


    $to = $input->getArgument("to");
    
    $newsletter = $em
      ->getRepository('NewsletterBundle:Newsletter')
      ->findAll();

    $message = \Swift_Message::newInstance()
        ->setSubject('Subscribers')
        ->setFrom($this->getContainer()->getParameter('newsletter_from_address'))
        ->setTo($to)
        ->setBody('Subscribers: ' . count($newsletter));
    $this->getContainer()->get('mailer')->send($message);

    $output->writeln('Report sent to ' . $to);
  }
}

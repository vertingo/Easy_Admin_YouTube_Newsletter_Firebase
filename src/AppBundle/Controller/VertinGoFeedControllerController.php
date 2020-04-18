<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
Use Eko\FeedBundle\Field\Item\ItemField;
use Eko\FeedBundle\Field\Channel\ChannelFieldInterface;
use Eko\FeedBundle\Field\Channel\ChannelField;
use Eko\FeedBundle\Field\Item\ItemlField;
use Eko\FeedBundle\Field\Item\GroupItemField;
use Eko\FeedBundle\Field\Item\MediaItemField;


class VertinGoFeedControllerController extends Controller
{

    public function feedAction()
    {

        $user =$this->get('security.token_storage')->getToken()->getUser();
        $medias = $this->getDoctrine()->getRepository('FileManagerBundle:DownloadFileCounter')->findBy(['owner' => 'vertingo']);

        $feed = $this->get('eko_feed.feed.manager')->get('medias');
        $feed->addChannelField(new ChannelField('VertinGoWebsite', 'https://www.facebook.com/vertingo/'));
        
        $feed->addFromArray($medias);

        $feed->addItemField(new GroupItemField('VertinGo', array(
            new ItemField('title', 'getFeedItemTitle', array('cdata' => false)),
            new ItemField('link', 'getFeedItemLink', array('cdata' => false)),
            new ItemField('description', 'getFeedItemDescription', array('cdata' => false)),
            new ItemField('date', 'getFeedItemPubDate', array('cdata' => false))
        )));
        
        $feed->addItemField(new MediaItemField('getFeedMediaItem'));

        return new Response($feed->render('rss')); 

        //$message = new \MartinGeorgiev\SocialPost\Message('your test message');
        //$container->get('social_post')->publish($message);
        
    }

}

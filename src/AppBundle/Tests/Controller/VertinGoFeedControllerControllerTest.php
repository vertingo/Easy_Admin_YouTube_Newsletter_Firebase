<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VertinGoFeedControllerControllerTest extends WebTestCase
{
    public function testFeed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'flux_rss_vertin_go_prod');
    }

}

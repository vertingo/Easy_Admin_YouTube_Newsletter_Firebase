<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InsertYouTubeControllerTest extends WebTestCase
{
    public function testInsertid()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'insertyoutube');
    }

}

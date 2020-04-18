<?php

namespace VideoPlayerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VideoPlayerControllerTest extends WebTestCase
{
    public function testListvideo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listvideo');
    }

}

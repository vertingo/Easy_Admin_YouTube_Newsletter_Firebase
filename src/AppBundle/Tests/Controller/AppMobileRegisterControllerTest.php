<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppMobileRegisterControllerTest extends WebTestCase
{
    public function testAppmobileregister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/appmobileregister');
    }

}

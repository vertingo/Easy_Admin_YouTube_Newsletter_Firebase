<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ManagerControllerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'front_file_manager');
    }

    public function testUploadfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'upload');
    }

    public function testBinaryfileresponse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/binaryFileResponse');
    }

}

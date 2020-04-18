<?php

namespace FileManagerBundle\Tests\Controller;

use FileManagerBundle\Tests\Fixtures\AbstractTestCase;
use Symfony\Component\HttpFoundation\Response;

class EmptyConfTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->initClient(['environment' => 'empty']);
    }

    public function testUndefinedConfManager()
    {
        $this->getManagerPage();
        $this->assertContains(
            'Please define a &quot;dir&quot; or a &quot;service&quot; parameter in your config.yml',
            $this->client->getResponse()->getContent()
        );
        $this->assertSame(
            Response::HTTP_INTERNAL_SERVER_ERROR,
            $this->client->getResponse()->getStatusCode()
        );
    }
}

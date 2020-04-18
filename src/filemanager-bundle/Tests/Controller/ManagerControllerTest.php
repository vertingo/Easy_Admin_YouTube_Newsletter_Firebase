<?php

namespace FileManagerBundle\Tests\Controller;

use FileManagerBundle\Tests\Fixtures\AbstractTestCase;

class ManagerControllerTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->initClient(['environment' => 'default']);
    }

    public function testDefaultConfManager()
    {
        $this->getManagerPage();

        $this->assertSame(
            200,
            $this->client->getResponse()->getStatusCode()
        );
    }

    public function testDefaultCssStylesAreLinked()
    {
        $crawler = $this->getManagerPage();

        $cssList = [
            '/bundles/filemanager/libs/bootstrap/dist/css/bootstrap.min.css',
            '/bundles/filemanager/libs/components-font-awesome/css/font-awesome.min.css',
            '/bundles/filemanager/libs/jstree/dist/themes/default/style.min.css',
            '/bundles/filemanager/libs/blueimp-file-upload/css/jquery.fileupload.css',
            '/bundles/filemanager/css/manager.css',
            '/bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.css',
        ];

        foreach ($cssList as $i => $css) {
            $this->assertSame(
                $css,
                $crawler->filter('link[rel="stylesheet"]')->eq($i)->attr('href')
            );
        }
    }

    public function testDefaultJsScriptsAreLinked()
    {
        $crawler = $this->getManagerPage();

        $jsList = [
            '/bundles/filemanager/libs/jquery/dist/jquery.min.js',
            '/bundles/filemanager/libs/bootstrap/dist/js/bootstrap.min.js',
            '/bundles/filemanager/libs/jstree/dist/jstree.min.js',
            '/bundles/filemanager/libs/blueimp-file-upload/js/vendor/jquery.ui.widget.js',
            '/bundles/filemanager/libs/blueimp-file-upload/js/jquery.iframe-transport.js',
            '/bundles/filemanager/libs/blueimp-file-upload/js/jquery.fileupload.js',
            '/bundles/filemanager/libs/sticky-kit/jquery.sticky-kit.min.js',
            '/bundles/filemanager/libs/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js',
            '/bundles/filemanager/libs/jQuery-contextMenu/dist/jquery.contextMenu.min.js',
        ];

        foreach ($jsList as $i => $js) {
            $this->assertSame(
                $js,
                $crawler->filter('script')->eq($i)->attr('src')
            );
        }
    }

    public function testListViewAction()
    {
        $crawler = $this->getManagerPage();
        $this->assertSame('Add files...', trim($crawler->filter('.fileinput-button span')->text()));
    }

    public function testNoParent()
    {
        $crawler = $this->getManagerPage();
        $this->assertCount(0, $crawler->filter('.top-bar a[title=Parent]'));
    }

    public function testParent()
    {
        $crawler = $this->getManagerSubDir();
        $this->assertCount(1, $crawler->filter('.top-bar a[title=Parent]'));
    }

    public function testTopBarLinks()
    {
        $crawler = $this->getManagerPage();
        $urls = [
            '/manager/?conf=default&tree=0',
            '/manager/?conf=default&view=list',
            '/manager/?conf=default&view=thumbnail',
        ];
        foreach ($urls as $i => $url) {
            $this->assertSame($url, $crawler->filter('.top-bar a')->eq($i)->attr('href'));
        }
    }

    public function testTableTr()
    {
        $crawler = $this->getManagerPage();

        $files = [
            'file',
        ];

        foreach ($files as $i => $file) {
            $this->assertSame($file, $crawler->filter('.list-blk tbody tr')->eq($i)->attr('class'));
        }
    }
}

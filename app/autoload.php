<?php

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';

//$loader->registerNamespaces(array('Eko'=> __DIR__.'/../vendor/bundles'));

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;

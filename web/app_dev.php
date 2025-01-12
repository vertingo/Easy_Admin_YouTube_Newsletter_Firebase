<?php

use Symfony\Component\Debug\Debug;
//use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/setup.html#checking-symfony-application-configuration-and-setup
// for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
if (isset($_SERVER['HTTP_CLIENT_IP']) || isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !(in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1', '172.18.0.1', '192.168.56.1', '192.168.144.3'], true) || PHP_SAPI === 'cli-server')) 
{
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
Debug::enable();

//set_error_handler('exceptions_error_handler');
$kernel = new AppKernel('dev', false);
$kernel->loadClassCache();
$request = Request::createFromGlobals();

//$request->$php_errormsg;
$exception = new Exception('This is a custom exception message');

$response = $kernel->handle($exception);
$response->send();
$kernel->terminate($request, $response);

<?php

//use Symfony\Component\ClassLoader\ApcClassLoader;
//use Symfony\Component\HttpFoundation\Request;
//
//$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
//
//// Use APC for autoloading to improve performance
//// Change 'sf2' by the prefix you want in order to prevent key conflict with another application
///*
//$loader = new ApcClassLoader('bsa', $loader);
//$loader->register(true);
//*/
//
//require_once __DIR__.'/../app/AppKernel.php';
////require_once __DIR__.'/../app/AppCache.php';
//
//$kernel = new AppKernel('prod', false);
//$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
//$request = Request::createFromGlobals();
//$response = $kernel->handle($request);
//$response->send();
//$kernel->terminate($request, $response);


require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';
require_once __DIR__.'/../app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
// wrap the default AppKernel with the AppCache one
$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
error_log($kernel->getLog());
$kernel->terminate($request, $response);
<?php

/**
 * Services are globally registered in this file
 */

use Phalcon\Mvc\Router,
	Phalcon\Mvc\Url as UrlResolver,
	Phalcon\DI\FactoryDefault,
	Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * Registering a router
 */
$di['router'] = function() {

	$router = new Router();

	$router->setDefaultModule("frontend");
	$router->setDefaultNamespace("DeProfundis\Frontend\Controllers");

	return $router;
};

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di['url'] = function() {
	$url = new UrlResolver();
	$url->setBaseUri('projects/DeProfundis/');
	return $url;
};

/**
 * Start the session the first time some component request the session service
 */
$di['session'] = function() {
	$session = new SessionAdapter();
	$session->start();
	return $session;
};

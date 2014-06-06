<?php

/*
 *  Initializing Slim application
 */

\Slim\Slim::registerAutoloader();

$app = new \SlimController\Slim(array(
                            'cookies.secret_key'         => md5('appsecretkey'), 
                            'controller.class_prefix'    => '',
							'controller.class_suffix'    => 'Controller',
                            'controller.method_suffix'   => ''
                     ));

/**
 * Require all models
 */
foreach (glob(APP_PATH."/models/*.php") as $filename) {
    require $filename;
}

/**
 * Require all controllers
 */
foreach (glob(APP_PATH."/controllers/*.php") as $filename) {    
    require $filename;
}

/**
 * Require all routes
 */
foreach (glob(APP_PATH."/routes/*.php") as $routes) {   
	$app->addRoutes(require $routes);		
}

require APP_PATH."/hooks.php";
require APP_PATH."/helpers/OAuthMiddleware.php";

$headers = apache_request_headers();
$app->add(new OAuth2Auth($headers));

$app->run(); 

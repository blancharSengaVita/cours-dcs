<?php

define('VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/views');
define('CONTROLLERS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/controllers');



$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



$routes =
	[
		'/' => 'index.php',
		'/about' => 'about.php',
		'/contact'=> 'contact.php'
	];




$controller = $routes[$path];


require CONTROLLERS_PATH . "/{$controller}";
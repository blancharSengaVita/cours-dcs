<?php

function routeToController($path){

	$routes = require './routes.php';
	if(array_key_exists($path, $routes)){
		$controllers = $routes[$path];
		require CONTROLLER_PATH . "/{$controllers}";
	}else {
		abort();
	}
}

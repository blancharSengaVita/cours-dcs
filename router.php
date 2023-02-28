<?php

function abort ($code=404){
	http_response_code(404);
	require VIEWS_PATH . "/codes/{$code}.view.php";
}

function routeToController(string $path): void {
	$routes = require 'routes.php';

	if (array_key_exists($path, $routes)) {
		$controller = $routes[$path];
		require CONTROLLERS_PATH . "/{$controller}";
	} else {
		abort();
	}
}
<?php
function abort(int $code = 404): void{
	http_response_code(404);
	require VIEWS_PATH . "/codes/{$code}.php";
}

function dd(mixed $var) : void {
	echo "<pre>";
	var_dump($_SERVER);
	echo "</pre>";
	die();
}

function urlIS(string $path) : bool
{
	return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $path;
}
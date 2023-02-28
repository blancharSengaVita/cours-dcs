<?php

define('STYLES', require "./config/styles.php");
define('VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/views');
define('CONTROLLER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/controllers');
require "./utils/functions.php";
require "./router.php";
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);


routeToController($path);




//require CONTROLLER_PATH . "/{$controllers}";
<?php

<<<<<<< HEAD
define('STYLES', require "./config/styles.php");
define('VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/views');
define('CONTROLLER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/controllers');
require "./utils/functions.php";
require "./router.php";
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);
=======
$author = $_GET["author"]??"";
>>>>>>> 389a2eaec82012671894aced18877c0a918b49b7


routeToController($path);




//require CONTROLLER_PATH . "/{$controllers}";
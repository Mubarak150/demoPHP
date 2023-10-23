<?php

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . "Core/functions.php";

require base_path('Core/Database.php');
require base_path('Core/Response.php');
require base_path("Core/Router.php");
require base_path('bootstrap.php'); // added in video 34, of making service container... 

$router = new \Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path("routes.php");
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// copied from jaffrey way's

// <?php
// const BASE_PATH = __DIR__.'/../';
// require BASE_PATH.'Core/functions.php';
// spl_autoload_register(function ($class) {
//     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
//     require base_path("{$class}.php");
// });

// require base_path('bootstrap.php');

// $router = new \Core\Router();
// $routes = require base_path('routes.php');

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
// $router->route($uri, $method);

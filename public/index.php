<?php

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . "Core/functions.php";

// spl_autoload_register(function ($class){
//     require base_path('Core/' . $class . 'php');
// });
require base_path('Core/Database.php');
require base_path('Core/Response.php');
require base_path("Core/Router.php");

$router = new \Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path("routes.php");
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


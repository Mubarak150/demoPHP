

<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/demoPHP/' => 'controllers/index.php',
    '/demoPHP/contact' => 'controllers/contact.php',
    '/demoPHP/about' => 'controllers/about.php'
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
else {
    abort ();
}



getToRoutes ($uri, $routes);

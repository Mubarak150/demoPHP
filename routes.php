<?php
$router->get('/demoPHP/about', 'controllers/about.php');
$router->get('/demoPHP/', 'controllers/index.php');
$router->get('/demoPHP/contact', 'controllers/contact.php');


$router->get('/demoPHP/notes', 'controllers/notes/index.php');
$router->get('/demoPHP/notes/create', 'controllers/notes/create.php');
$router->get('/demoPHP/note', 'controllers/notes/show.php');




// return [
//     '/demoPHP/' => 'controllers/index.php',
//     '/demoPHP/contact' => 'controllers/contact.php',
//     '/demoPHP/notes' => 'controllers/notes/index.php',
//     '/demoPHP/notes/create' => 'controllers/notes/create.php',
//     '/demoPHP/note' => 'controllers/notes/show.php',
//     '/demoPHP/about' => 'controllers/about.php'
// ];
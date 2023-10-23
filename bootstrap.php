<?php

use Core\App;
use Core\Container;
use Core\Database;

require base_path("Core/Container.php"); // in jaffrey's this is not required in the file, but mine doesnt work without it. 
require base_path("Core/App.php");       // ditto.

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

App::setContainer($container);
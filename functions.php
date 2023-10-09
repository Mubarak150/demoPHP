<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

////////         /// router functions ///       ////////
function abort ($code = Response::PAGE_NOT_FOUND) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}



function getToRoutes ($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }
    else {
        abort ();
    }
}

function authorize ($condition, $status = Response::UNAUTHORIZED) {
    if ($condition) {
        abort ($status);
    }
}
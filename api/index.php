<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../helper/functions.php";
require __DIR__ . "/../config/routes.php";

$uri = preg_replace("@(\d+)@", "{id}", $_SERVER['REQUEST_URI']);
$method = ($_POST['_method'] ?? $_SERVER['REQUEST_METHOD']);

switch (strtolower($method)) {
    case "get":
        if (!array_key_exists($uri, $routes['get'])) {
            abort();
            break;
        }
        require $routes['get'][$uri];
        break;
    case "post":
        if (!array_key_exists($uri, $routes['post'])) {
            abort();
            break;
        }
        require $routes['post'][$uri];
        break;
    case "patch": 
        if (!array_key_exists($uri, $routes['patch'])) {
            abort();
            break;
        }
        require $routes['patch'][$uri];
        break;
    default:
        abort();
}


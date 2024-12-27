<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($_SERVER['HTTP_HOST'] === "localhost") {
    $routes = [
        URL_ROOT . '/' => 'controllers/index.php',
        URL_ROOT . '/about' => 'controllers/about.php',
        URL_ROOT . '/notes' => 'controllers/notes.php',
        URL_ROOT . '/contact' => 'controllers/contact.php'
    ];
} else {
    $routes = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/notes' => 'controllers/notes.php',
        '/contact' => 'controllers/contact.php'
    ];
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require 'views/404.php';
    die();
}

routeToController($uri, $routes);

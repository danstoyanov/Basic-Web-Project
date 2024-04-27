<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/home' => 'controllers/index.php',
    '/about-us' => 'controllers/about-us.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php'
];

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";
    die();
}

function routeToController ($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
};

routeToController($uri, $routes);
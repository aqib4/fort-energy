<?php

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// remove query string
$request = strtok($request, '?');

// remove base path
$base = '/fort-energy/public';
$request = str_replace($base, '', $request);

switch ($request) {

    case '/':
    case '':
        require __DIR__ . '/../app/views/home.php';
        break;

    case '/commercial':
        require __DIR__ . '/../app/views/commercial.php';
        break;

    case '/residential':
        require __DIR__ . '/../app/views/residential.php';
        break;

    default:
        echo "404 - Page not found";
        break;
}

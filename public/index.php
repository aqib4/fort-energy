<?php

require_once __DIR__ . '/../app/core/Router.php';

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// remove query string
$request = strtok($request, '?');

// remove base path (adjustable for deployment)
$base = '/fort-energy/public';
if (strpos($request, $base) === 0) {
    $request = substr($request, strlen($base));
}
if ($request === '') {
    $request = '/';
}

$method = $_SERVER['REQUEST_METHOD'];

$router = new Router();

// Load routes
require_once __DIR__ . '/../routes/web.php';

// Dispatch
$router->dispatch($request, $method);

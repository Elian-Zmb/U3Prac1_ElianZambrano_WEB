<?php

$routes = require __DIR__ . '/../routes/web.php';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Ajuste de ruteo para localhost
$basePath = '/U3Prac1_ElianZambrano/public/index.php';
$path = str_replace($basePath, '', $requestUri);
if ($path === '' || $path === '/') { $path = '/'; }

$route = $routes[$path] ?? $routes[$requestUri] ?? null;

if ($route) {
    require __DIR__ . '/../' . $route;
} else {
    http_response_code(404);
    echo "404 Not Found";
}
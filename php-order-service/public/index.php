<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\OrderController;

$controller = new OrderController();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

$routes = [
    'POST' => [
        '/orders' => [$controller, 'createOrder'],
    ],
    'GET' => [
        '/orders' => [$controller, 'getOrders'],
    ],
];

if (isset($routes[$method][$uri])) {
    call_user_func($routes[$method][$uri]);
} else {
    http_response_code(404);
    echo json_encode(['message' => 'Not Found']);
}
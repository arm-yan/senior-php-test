<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\OrderController;

$controller = new OrderController();

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/orders' && $method === 'POST') {
    $controller->createOrder();
} elseif ($uri === '/orders' && $method === 'GET') {
    $controller->getOrders();
} else {
    http_response_code(404);
    echo json_encode(['message' => 'Not Found']);
}

<?php

namespace App\Controller;

use App\DTO\CreateOrderDTO;
use App\Service\OrderService;

class OrderController
{
    private OrderService $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function createOrder(): void
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if(!array_key_exists('productId', $data) || !array_key_exists('quantity', $data)) {
            http_response_code(422);
            echo json_encode(['message' => 'Missing required fields']);
            return;
        }

        $createOrderDTO = new CreateOrderDTO($data['productId'], $data['quantity']);

        $order = $this->orderService->createOrder($createOrderDTO);
        echo json_encode($order);
    }

    public function getOrders(): void
    {
        $orders = $this->orderService->getOrders();
        echo json_encode($orders);
    }
}
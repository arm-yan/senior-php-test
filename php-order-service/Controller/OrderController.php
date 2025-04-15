<?php

namespace App\Controller;

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
        $order = $this->orderService->createOrder($data['productId'], $data['quantity']);
        echo json_encode($order);
    }

    public function getOrders(): void
    {
        $orders = $this->orderService->getOrders();
        echo json_encode($orders);
    }
}
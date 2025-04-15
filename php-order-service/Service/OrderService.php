<?php

namespace App\Service;

use App\DTO\OrderDTO;
use App\Storage\OrderStorage;
use App\HttpClient\ProductClient;

class OrderService
{
    private OrderStorage $storage;
    private ProductClient $productClient;

    public function __construct()
    {
        $this->storage = OrderStorage::getInstance();
        $this->productClient = new ProductClient();
    }

    public function createOrder(string $productId, int $quantity): array
    {
        $product = $this->productClient->getProductById($productId);

        if (!$product) {
            http_response_code(404);
            echo json_encode(['message' => 'Product not found']);
            exit;
        }

        $totalPrice = $product['price'] * $quantity;
        $order = new OrderDTO($productId, $quantity, $totalPrice);

        $this->storage->addOrder($order);

        return $order->toArray();
    }

    public function getOrders(): array
    {
        return $this->storage->getOrders();
    }
}
<?php

namespace App\Storage;

use App\DTO\OrderDTO;

class OrderStorage
{
    private static ?OrderStorage $instance = null;
    private array $orders = [];

    public static function getInstance(): self
    {
        return self::$instance ??= new self();
    }

    public function addOrder(OrderDTO $order): void
    {
        $this->orders[] = $order->toArray();
    }

    public function getOrders(): array
    {
        return $this->orders;
    }
}
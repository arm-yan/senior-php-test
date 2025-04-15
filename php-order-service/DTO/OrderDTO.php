<?php

namespace App\DTO;

use Ramsey\Uuid\Uuid;

class OrderDTO
{
    private string $orderId;
    private string $productId;
    private int $quantity;
    private float $totalPrice;
    private string $createdAt;

    public function __construct(string $productId, int $quantity, float $price)
    {
        $this->orderId = Uuid::uuid4()->toString();
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->totalPrice = $quantity * $price;
        $this->createdAt = date('c');
    }

    public function toArray(): array
    {
        return [
            'orderId' => $this->orderId,
            'productId' => $this->productId,
            'quantity' => $this->quantity,
            'totalPrice' => $this->totalPrice,
            'createdAt' => $this->createdAt,
        ];
    }
}
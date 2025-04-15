<?php

namespace App\HttpClient;

use GuzzleHttp\Client;

class ProductClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost:3000',
            'timeout'  => 2.0,
        ]);
    }

    public function getProductById(string $id): ?array
    {
        try {
            $response = $this->client->get("/products/{$id}");
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return null;
        }
    }
}
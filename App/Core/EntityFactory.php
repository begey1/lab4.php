<?php
declare(strict_types=1);

namespace App\Core;

use App\Models\Product;
use App\Models\User;

class EntityFactory
{
    public function createProduct(
        string $id,
        string $createdAt,
        string $name,
        float $price
    ): Product {
        return new Product($id, $createdAt, $name, $price);
    }

    public function createUser(
        string $id,
        string $createdAt,
        string $name,
        string $email
    ): User {
        return new User($id, $createdAt, $name, $email);
    }
}
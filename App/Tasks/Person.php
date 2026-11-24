<?php
declare(strict_types=1);

namespace App\Tasks;

class Person
{
    public function __construct(
        protected string $name,
        protected int $age
    ) {}

    public function getInfo(): string
    {
        return "Ім'я: {$this->name}, вік: {$this->age}";
    }
}
<?php
declare(strict_types=1);

namespace App\Tasks;

class Genre
{
    public function __construct(
        private string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}
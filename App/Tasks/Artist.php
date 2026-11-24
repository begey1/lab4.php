<?php
declare(strict_types=1);

namespace App\Tasks;

class Artist
{
    public function __construct(
        private string $name,
        private Genre $genre
    ) {}

    public function getDetails(): string
    {
        return "Виконавець: {$this->name}, жанр: {$this->genre->getName()}";
    }
}
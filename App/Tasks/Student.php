<?php
declare(strict_types=1);

namespace App\Tasks;

class Student extends Person
{
    public function __construct(
        string $name,
        int $age,
        private string $specialty
    ) {
        parent::__construct($name, $age);
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", спеціальність: {$this->specialty}";
    }
}
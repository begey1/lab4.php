<?php
declare(strict_types=1);

namespace App\Tasks;

class Teacher extends Person
{
    public function __construct(
        string $name,
        int $age,
        protected string $subject
    ) {
        parent::__construct($name, $age);
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", предмет: {$this->subject}";
    }
}
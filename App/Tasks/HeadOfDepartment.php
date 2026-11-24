<?php
declare(strict_types=1);

namespace App\Tasks;

class HeadOfDepartment extends Teacher
{
    public function __construct(
        string $name,
        int $age,
        string $subject,
        private string $department
    ) {
        parent::__construct($name, $age, $subject);
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", кафедра: {$this->department}";
    }
}
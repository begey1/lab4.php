<?php
declare(strict_types=1);

namespace App\Core;

class Database
{
    private static ?Database $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}
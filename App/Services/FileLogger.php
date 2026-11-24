<?php
declare(strict_types=1);

namespace App\Services;

use App\Interfaces\LoggerInterface;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        $file = __DIR__ . '/../../logs.txt';

        file_put_contents(
            $file,
            $message . PHP_EOL,
            FILE_APPEND
        );
    }
}
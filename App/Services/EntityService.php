<?php
declare(strict_types=1);

namespace App\Services;

use App\Core\EntityFactory;
use App\Interfaces\LoggerInterface;

class EntityService
{
    public function __construct(
        private LoggerInterface $logger,
        private EntityFactory $factory
    ) {}

    public function run(): void
    {
        $product = $this->factory->createProduct(
            '1',
            date('Y-m-d'),
            'Ноутбук',
            25000.00
        );

        $user = $this->factory->createUser(
            '2',
            date('Y-m-d'),
            'Олег',
            'oleh@example.com'
        );

        $this->logger->log($product->getDetails());
        $this->logger->log($user->getDetails());

        echo '<h3>JSON товару:</h3>';
        echo '<pre>' . $product->exportToJson() . '</pre>';
    }
}
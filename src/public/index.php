<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$transaction1 = (new App\Transaction(amount: 100, description: 'Transaction 1'))
->addTax(rate: 8)
->applyDiscount(rate: 10);

$transaction2 = (new App\Transaction(amount: 1000, description: 'Transaction 2'))
->addTax(rate: 10)
->applyDiscount(rate: 15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());
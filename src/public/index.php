<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction1 = (new Transaction(amount: 100, description: 'Transaction 1'))
->addTax(rate: 8)
->applyDiscount(rate: 10);

$transaction2 = (new Transaction(amount: 1000, description: 'Transaction 2'))
->addTax(rate: 10)
->applyDiscount(rate: 15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());
<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction = new Transaction(amount: 100, description: 'Transaction 1');

$transaction->addTax(rate: 8);

$transaction->applyDiscount(rate: 10);

var_dump(value: $transaction->amount);
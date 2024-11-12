<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction = new Transaction(amount: 14, description: 'Transaction 1');

$transaction->addTax(8);

$transaction->applyDiscount(10);

var_dump(value: $transaction->amount);
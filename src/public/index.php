<?php

declare(strict_types=1);

require_once '../Transaction.php';

$amount = (new Transaction(amount: 100, description: 'Transaction 1'))
->addTax(rate: 8)
->applyDiscount(rate: 10)
->getAmount();

var_dump(value: $amount);
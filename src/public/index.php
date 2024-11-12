<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction = new Transaction(amount: 14, description: 'Transaction 1');

var_dump(value: $transaction->amount);
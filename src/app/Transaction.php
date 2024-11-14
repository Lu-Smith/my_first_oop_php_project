<?php

declare(strict_types=1);

namespace App;

class Transaction
{

  public const STATUS_PAID = "paid";
  public const STATUS_UNPAID = "unpaid";
  public const STATUS_PENDING = "pending";
  private float $amount = 15;
  private string $description;

  public function __construct(float $amount, string $description) {
    $this->amount = $amount;
    $this->description = $description;
  }

  public function addTax(float $rate): Transaction
  {
    $this->amount += $this->amount * $rate / 100;

    return $this;
  }

  public function applyDiscount(float $rate): Transaction 
  {
    $this->amount -= $this->amount * $rate / 100;

    return $this;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }
}
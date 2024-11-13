<?php

declare(strict_types=1);

class Transaction
{
  private float $amount = 15;
  private string $description;

  public function __construct(float $amount, string $description) {
    $this->amount = $amount;
    $this->description = $description;
  }

  public function addTax(float $rate): void
  {
    $this->amount += $this->amount * $rate / 100;
  }

  public function applyDiscount(float $rate): void 
  {
    $this->amount -= $this->amount * $rate / 100;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }
}
<?php

declare(strict_types=1);

namespace App;

use App\Enum\Status;

class Transaction
{

  private string $status;
  private float $amount = 15;
  private string $description;

  public function __construct(float $amount, string $description) {
    $this->setStatus(Status::PENDING);
    $this->amount = $amount;
    $this->description = $description;
  }

  public function setStatus(string $status): self {
    if(! isset(Status::ALL_STATUSES[$status])) {
      throw new \InvalidArgumentException('Invalid status');
    }

    $this->status = $status;

    return $this;
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
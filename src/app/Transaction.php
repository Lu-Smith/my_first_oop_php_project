<?php

declare(strict_types=1);

namespace App;

use App\Enum\Status;

class Transaction
{
  public static int $count = 0;
  private string $status;

  public function __construct(
    public float $amount, 
    public string $description) 
  {
    $this->setStatus(Status::PENDING);
    self::$count++;
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
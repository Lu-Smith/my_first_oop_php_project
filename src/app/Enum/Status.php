<?php

namespace App\Enum;

class Status
{
  public const PAID = "paid";
  public const UNPAID = "unpaid";
  public const PENDING = "pending";

  public const ALL_STATUSES = [
    self::PAID => 'Paid',
    self::UNPAID => 'Unpaid',
    self::PENDING => 'Pending',
  ];
}
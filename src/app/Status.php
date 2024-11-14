<?php

namespace App\Enum;

class Status
{
  public const STATUS_PAID = "paid";
  public const STATUS_UNPAID = "unpaid";
  public const STATUS_PENDING = "pending";

  public const ALL_STATUSES = [
    self::STATUS_PAID => 'Paid',
    self::STATUS_UNPAID => 'Unpaid',
    self::STATUS_PENDING => 'Pending',
  ];
}
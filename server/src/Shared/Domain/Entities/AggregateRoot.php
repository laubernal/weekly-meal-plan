<?php

namespace Shared\Domain\Entities;

use DateTime;
use IdVo;

class AggregateRoot
{
    public function __construct(IdVo $id, DateTime $createdAt, DateTime $updatedAt)
    {
    }
}

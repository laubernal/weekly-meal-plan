<?php

namespace Shared\Domain\Entities;

use DateTime;
use IdVo;

class BaseEntity
{
    protected function __construct(
        private IdVo $id,
        private DateTime $createdAt,
        private DateTime $updatedAt
    ) {
    }

    public function id(): IdVo
    {
        return $this->id;
    }

    public function createdAt(): DateTime
    {
        return $this->createdAt ? $this->createdAt : new DateTime();
    }

    public function updatedAt(): DateTime
    {
        return $this->updatedAt ? $this->updatedAt : new DateTime();
    }
}

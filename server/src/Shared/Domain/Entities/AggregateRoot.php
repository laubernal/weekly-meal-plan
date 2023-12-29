<?php

namespace Shared\Domain\Entities;

use DateTime;
use IdVo;

class AggregateRoot
{
    protected function __construct(
        private IdVo $id,
        private DateTime $createdAt = new DateTime(),
        private DateTime $updatedAt = new DateTime()
    ) {
    }

    public function id(): IdVo
    {
        return $this->id;
    }

    public function createdAt(): DateTime
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}

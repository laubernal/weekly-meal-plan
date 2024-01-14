<?php

namespace App\Shared\Domain\Vo;

class QuantityVo
{
    public function __construct(private NumberVo $amount, private string $unit)
    {
    }

    public function amount(): NumberVo
    {
        return $this->amount;
    }

    public function unit(): string
    {
        return $this->unit;
    }
}

<?php

namespace App\Shared\Domain\Vo;

class QuantityVo
{
    public function __construct(private AmountVo $amount, private UnitVo $unit)
    {
    }

    public function amount(): AmountVo
    {
        return $this->amount;
    }

    public function unit(): UnitVo
    {
        return $this->unit;
    }
}

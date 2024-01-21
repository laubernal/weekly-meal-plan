<?php

namespace App\Shared\Domain\Vo;

use App\Shared\Domain\Error\UnitFormatError;

class UnitVo
{
    const GRAMS = 'grams';
    const KILOGRAMS = 'kilograms';

    public function __construct(private StringVo $unit)
    {
        $this->validate();
    }

    public function unit(): StringVo
    {
        return $this->unit;
    }

    private function validate()
    {
        if ($this->unit !== self::GRAMS || $this->unit !== self::KILOGRAMS) {
            throw new UnitFormatError();
        }
    }
}

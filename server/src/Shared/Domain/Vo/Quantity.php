<?php

use NumberVo;
use IncorrectFormatError;

class Quantity extends NumberVo
{
    private $_value;

    public function __construct(int $value)
    {
        if ($this->validate($value)) {
            throw new IncorrectFormatError('Incorrect quantity format');
        }

        $this->_value = $value;
    }

    protected function validate(mixed $value): bool
    {
        return !$value->is_int();
    }

    public function value(): int
    {
        return $this->_value;
    }
}

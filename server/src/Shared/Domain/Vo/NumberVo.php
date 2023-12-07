<?php

class NumberVo extends ValueObject
{
    private $_value;

    public function __construct(int $value)
    {
        if ($this->validate($value)) {
            throw new Exception('Incorrect number format');
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

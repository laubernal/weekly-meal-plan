<?php

use ValueObject;
use StringFormatError;

class StringVo extends ValueObject
{
    public function __construct(private string $value)
    {
        if ($this->validate($value)) {
            throw new StringFormatError();
        }
    }

    protected function validate(mixed $value): bool
    {
        return !$value->is_int();
    }

    public function value(): int
    {
        return $this->value;
    }
}

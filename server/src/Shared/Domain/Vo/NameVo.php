<?php

namespace App\Shared\Domain\Vo;

use App\Shared\Domain\Error\StringFormatError;

class NameVo extends ValueObject
{
    private $_value;

    public function __construct(string $value)
    {
        if ($this->validate($value)) {
            throw new StringFormatError();
        }

        $this->_value = $value;
    }

    protected function validate(mixed $value): bool
    {
        return !$value->is_string();
    }

    public function value(): string
    {
        return $this->_value;
    }
}

<?php

use DomainError;
use ValueObject;
use Ramsey\Uuid\Uuid;
use Doctrine\ORM\Mapping\Id;

class IdVo extends ValueObject
{
    private $_value;

    public function __construct(string $value)
    {
        if ($this->validate($value)) {
            throw new DomainError('Incorrect ID format');
        }

        $this->_value = $value;
    }

    public static function generate(): IdVo
    {
        return new IdVo(Uuid::uuid4()->toString());
    }

    protected function validate(mixed $value): bool
    {
        return !Uuid::isValid($value);
    }

    public function value(): string
    {
        return $this->_value;
    }
}

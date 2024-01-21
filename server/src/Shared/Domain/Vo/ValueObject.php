<?php
namespace App\Shared\Domain\Vo;

abstract class ValueObject
{
    abstract protected function validate(mixed $primitive): bool;

    public abstract function value(): mixed;
}

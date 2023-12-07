<?php

abstract class ValueObject
{
    abstract protected function validate(mixed $primitive): bool;

    public abstract function value(): mixed;
}

<?php

use DomainError;

class IncorrectFormatError extends DomainError
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

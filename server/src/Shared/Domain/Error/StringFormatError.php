<?php

namespace App\Shared\Domain\Error;


class StringFormatError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Must be string');
    }
}

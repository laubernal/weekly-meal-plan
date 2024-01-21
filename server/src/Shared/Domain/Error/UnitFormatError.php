<?php

namespace App\Shared\Domain\Error;


class UnitFormatError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Unit format is incorrect');
    }
}

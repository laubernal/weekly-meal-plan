<?php

use DomainError;

class UnitFormatError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Unit format is incorrect');
    }
}

<?php

use DomainError;

class NumberFormatError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Must be a number');
    }
}

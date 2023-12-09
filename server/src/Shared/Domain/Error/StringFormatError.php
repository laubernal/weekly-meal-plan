<?php

use DomainError;

class StringFormatError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Must be string');
    }
}

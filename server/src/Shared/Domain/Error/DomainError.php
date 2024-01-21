<?php

namespace App\Shared\Domain\Error;

use Error;

class DomainError extends Error
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

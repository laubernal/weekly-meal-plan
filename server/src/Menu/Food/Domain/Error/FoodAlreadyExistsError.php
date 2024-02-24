<?php

namespace App\Menu\Food\Domain\Error;

use App\Shared\Domain\Error\DomainError;

class FoodAlreadyExistsError extends DomainError
{
    public function __construct()
    {
        parent::__construct('Food already exists error');
    }
}

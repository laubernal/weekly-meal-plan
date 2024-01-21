<?php

namespace App\Shared\Domain\Vo;

use App\Shared\Domain\Error\DomainError;

enum Types: string
{
    case BREAKFAST = 'breakfast';
    case LUNCH = 'lunch';
    case DINNER = 'dinner';

    public static function isValid(string $value): bool
    {
        return in_array($value, self::cases(), true);
    }
}

class MealTypeVo
{
    public function __construct(private string $type)
    {
        $this->validate();
    }

    private function validate()
    {
        if (!Types::isValid($this->type)) {
            throw new DomainError('Invalid type');
        }
    }
}

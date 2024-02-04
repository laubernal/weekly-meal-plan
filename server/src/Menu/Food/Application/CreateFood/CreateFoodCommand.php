<?php

namespace App\Menu\Food\Application\CreateFood;

use App\Shared\Domain\Bus\Command\Command;

class CreateFoodCommand implements Command
{
    public function __construct(
        private string $id,
        private string $name,
        private string $category,
        private int $amount,
        private string $unit
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function category(): string
    {
        return $this->category;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function unit(): string
    {
        return $this->unit;
    }
}

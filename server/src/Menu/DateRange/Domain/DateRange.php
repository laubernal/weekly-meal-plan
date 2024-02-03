<?php

namespace App\Menu\DateRange\Domain;

use App\Menu\Meal\Domain\Meal;
use App\Shared\Domain\Vo\IdVo;
use DateTime;
use Shared\Domain\Entities\AggregateRoot;

class DateRange extends AggregateRoot
{
    /**
     * __construct
     *
     * @param  Meal[] $meals
     */
    public function __construct(IdVo $id, private DateTime $date, private array $meals)
    {
        parent::__construct($id, new DateTime(), new DateTime());
    }

    public function date(): DateTime
    {
        return $this->date;
    }

    /**
     * meals
     *
     * @return Meal[]
     */
    public function meals(): array
    {
        return $this->meals;
    }
}

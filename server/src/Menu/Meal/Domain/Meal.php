<?php

namespace App\Menu\Meal\Domain;

use App\Menu\Food\Domain\Food;
use App\Shared\Domain\Vo\IdVo;
use App\Shared\Domain\Vo\MealTypeVo;
use DateTime;
use Shared\Domain\Entities\AggregateRoot;

class Meal extends AggregateRoot
{

    /**
     * __construct
     *
     * @param  Food[] $foods
     */
    public function __construct(IdVo $id, private array $foods, private MealTypeVo $type)
    {
        parent::__construct($id, new DateTime(), new DateTime());
    }

    /**
     * foods
     *
     * @return Food[]
     */
    public function foods(): array
    {
        return $this->foods;
    }

    public function type(): MealTypeVo
    {
        return $this->type;
    }
}

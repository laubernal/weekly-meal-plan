<?php

namespace App\Menu\Food\Domain;

use App\Shared\Domain\Vo\CategoryVo;
use App\Shared\Domain\Vo\IdVo;
use App\Shared\Domain\Vo\NameVo;
use App\Shared\Domain\Vo\QuantityVo;
use DateTime;
use Shared\Domain\Entities\AggregateRoot;

class Food extends AggregateRoot
{
    // public static function build(Name $name, mixed $category, mixed $quantity): Food
    // {
    //     return new Food(IdVo::generate(), $name, $category, $quantity);
    // }

    public function __construct(IdVo $id, private NameVo $name, private CategoryVo $category, private QuantityVo $quantity)
    {
        parent::__construct($id, new DateTime(), new DateTime());
    }

    public function name(): NameVo
    {
        return $this->name;
    }

    public function category(): CategoryVo
    {
        return $this->category;
    }

    public function quantity(): QuantityVo
    {
        return $this->quantity();
    }
}

<?php

namespace Food\Domain;

use DateTime;
use IdVo;
use Name;
use Shared\Domain\Entities\AggregateRoot;

class Food extends AggregateRoot
{
    public static function build(Name $name, mixed $category, mixed $quantity): Food
    {
        return new Food(IdVo::generate(), $name, $category, $quantity);
    }

    public function __construct(IdVo $id, private Name $name, private mixed $category, private mixed $quantity)
    {
        parent::__construct($id, new DateTime(), new DateTime());
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function category(): Name
    {
        return $this->category;
    }

    public function quantity(): Name
    {
        return $this->quantity();
    }
}

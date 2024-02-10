<?php

namespace App\Menu\Food\Domain\Repository;

use App\Menu\Food\Domain\Food;
use App\Shared\Domain\Repository\IRepository;
use App\Shared\Domain\Vo\IdVo;
use Shared\Domain\Entities\AggregateRoot;

interface IFoodRepository extends IRepository
{
    /**
     * @param Food $entity
     */
    public function save($entity): void;
    /**
     * @return Food[]
     */
    public function find(): array;
    /**
     * @return Food
     */
    public function findOne(IdVo $id): AggregateRoot;
    /**
     * @param Food $entity
     */
    public function update($entity): void;
    public function delete(IdVo $id): void;
}

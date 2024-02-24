<?php

namespace App\Shared\Domain\Repository;

use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Vo\IdVo;
use Shared\Domain\Entities\AggregateRoot;

interface IRepository
{
    public function save(AggregateRoot $entity): void;
    /**
     * @return  AggregateRoot[]
     */
    public function find(): array;
    public function findOne(Criteria $criteria): AggregateRoot;
    public function update(AggregateRoot $entity): void;
    public function delete(Criteria $criteria): void;
}

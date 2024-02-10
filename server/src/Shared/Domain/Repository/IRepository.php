<?php

namespace App\Shared\Domain\Repository;

use App\Shared\Domain\Vo\IdVo;
use Shared\Domain\Entities\AggregateRoot;

interface IRepository
{
    public function save(AggregateRoot $entity): void;
    /**
     * @return  AggregateRoot[]
     */
    public function find(): array;
    public function findOne(IdVo $id): AggregateRoot;
    public function update(AggregateRoot $entity): void;
    public function delete(IdVo $id): void;
}

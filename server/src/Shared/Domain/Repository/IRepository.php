<?php

namespace App\Shared\Domain\Repository;

interface IRepository
{
    public function save(): void;
    public function find(): void;
    public function findOne(): void;
    public function update(): void;
    public function delete(): void;
}

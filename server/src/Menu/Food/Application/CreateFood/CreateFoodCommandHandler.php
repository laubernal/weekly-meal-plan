<?php

namespace App\Menu\Food\Application\CreateFood;

use App\Menu\Food\Domain\Error\FoodAlreadyExistsError;
use App\Menu\Food\Domain\Food;
use App\Menu\Food\Domain\Repository\IFoodRepository;
use App\Shared\Domain\Bus\Command\CommandHandler;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Criteria\Filters;
use App\Shared\Domain\Vo\AmountVo;
use App\Shared\Domain\Vo\CategoryVo;
use App\Shared\Domain\Vo\IdVo;
use App\Shared\Domain\Vo\NameVo;
use App\Shared\Domain\Vo\QuantityVo;
use App\Shared\Domain\Vo\StringVo;
use App\Shared\Domain\Vo\UnitVo;

class CreateFoodCommandHandler implements CommandHandler
{
    public function __construct(private IFoodRepository $repository)
    {
    }

    public function __invoke(CreateFoodCommand $command): void
    {
        $id = new IdVo($command->id());
        $name = new NameVo($command->name());
        $category = new CategoryVo($command->category());

        $amount = new AmountVo($command->amount());
        $unit = new UnitVo(new StringVo($command->unit()));
        $quantity = new QuantityVo($amount, $unit);

        $food = new Food($id, $name, $category, $quantity);

        $this->ensureFoodNotExists($name);

        $this->repository->save($food);
    }

    private function ensureFoodNotExists(NameVo $name): void
    {
        $filters = Filters::fromValues([$name]);

        $criteria = new Criteria($filters);

        $result = $this->repository->findOne($criteria);

        if ($result) {
            throw new FoodAlreadyExistsError();
        }
    }
}

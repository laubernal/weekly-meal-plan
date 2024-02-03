<?php

namespace App\Menu\Menu\Domain;

use App\Menu\DateRange\Domain\DateRange;
use App\Shared\Domain\Vo\IdVo;
use DateTime;
use Shared\Domain\Entities\AggregateRoot;

class Menu extends AggregateRoot
{

    /**
     * __construct
     *
     * @param  DateRange[] $dateRanges
     */
    public function __construct(IdVo $id, private array $dateRanges)
    {
        parent::__construct($id, new DateTime(), new DateTime());
    }

    /**
     * dateRanges
     * 
     * @return DateRange[]
     */
    public function dateRanges(): array
    {
        return $this->dateRanges;
    }
}

<?php

declare(strict_types=1);

namespace App\EmailSender\Application\FindEmail;

use App\Shared\Domain\Bus\Query\QueryHandler;

final class FindEmail implements QueryHandler
{
    // public function __construct(private EmailRepository $repository)
    // {
    // }

    // public function __invoke(FindEmailQuery $query) : FindEmailResponse
    public function __invoke(FindEmailQuery $query): void
    {
        // $email = $this->repository->findById(
        //     EmailId::fromInt(
        //         $query->id(),
        //     ),
        // );

        // if ($email === null) {
        //     throw new InvalidArgumentException('Email unreachable');
        // }

        // return new FindEmailResponse(
        //     email: $email,
        // );
    }
}

<?php

declare(strict_types=1);

namespace App\EmailSender\Infrastructure\Http;

use App\Shared\Domain\Bus\Query\QueryBus;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GetEmailController
{
    public function __construct(
        // private GetEmailResponder $responder,
        private QueryBus $queryBus,
    ) {
    }

    // public function __invoke(Request $request, int $id): Response
    public function __invoke(Request $request, int $id): void
    {
        try {
            /** @var FindEmailResponse $findEmailResponse */
            // $findEmailResponse = $this->queryBus->ask(
            //     new FindEmailQuery(id: $id)
            // );

            $email = $findEmailResponse->email();

            // $this->responder->loadEmail($email);
        } catch (Exception $e) {
            // $this->responder->loadError($e->getMessage());
        }

        // return $this->responder->response();
    }
}

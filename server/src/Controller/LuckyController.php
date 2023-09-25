<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    /**
     * number
     *
     * @return Response
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        dump(sprintf("%s --- %d", "Lucky number", $number));

        return new Response(
            '<html><body><h1>Lucky number: ' . $number . '</h1></body></html>'
        );
    }
}

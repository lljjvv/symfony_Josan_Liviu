<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/lucky/annotation_number")
     */
    public function numberByAnnotation(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Annotation Lucky number: ' . $number . '</body></html>'
        );
    }
}

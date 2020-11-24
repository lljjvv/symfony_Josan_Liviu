<?php

namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoggerController extends AbstractController
{
    /**
     * @Route("/logger/{name}")
     */
    public function index($name, LoggerInterface $logger, GreetingGenerator $generator)
    {
        $logger->info("Saying hello to $name!");

        $greeting = $generator->getRandomGreeting();
        $logger->info("Saying $greeting to $name!");

        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'name' => $name
        ]);
    }
}

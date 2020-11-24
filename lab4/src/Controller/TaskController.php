<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\Type\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/form")
     */
    public function new(Request $request)
    {
        $task = new Task();

        $task->setTitle('Title');
        $task->setContent('My content');

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $task = $form->getData();

            return $this->redirectToRoute('task_success');
        }

        return $this->render('new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/success", name="task_success")
     */
    public function successAction(){
        return $this->render('success.html.twig');
    }
}
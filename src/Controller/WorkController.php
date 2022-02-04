<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkController extends AbstractController
{
    #[Route('/work', name: 'work')]
    public function work(): Response
    {
        return $this->render('defualt/work.html.twig', [
            'controller_name' => 'WorkController',
        ]);
    }
}

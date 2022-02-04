<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefualtController extends AbstractController
{
    /**
     * @Route("/", name="defualt")
     */
    public function defualt(): Response
    {
        return $this->render('defualt/index.html.twig', [
            'controller_name' => 'DefualtController',
        ]);
    }
}

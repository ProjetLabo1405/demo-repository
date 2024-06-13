<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionPeripheriquesController extends AbstractController
{
    #[Route('/gestion/peripheriques', name: 'peripheriques.index')]
    public function index(): Response
    {
        return $this->render('pages/gestion_peripheriques/index.html.twig', [
            'controller_name' => 'GestionPeripheriquesController',
        ]);
    }
}

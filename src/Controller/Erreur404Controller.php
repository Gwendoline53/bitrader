<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Erreur404Controller extends AbstractController
{
    #[Route('/404', name: 'app_404')]
    public function index(): Response
    {
        return $this->render('templates/bundles/TwigBundle/Exception/error.html.twig', [
            'controller_name' => '404Controller',
        ]);
    }
}

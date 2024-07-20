<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class ServicesController extends AbstractController
{
    #[Route(path: '/services', name: 'services')]

    public function index(Request $request): Response
    {
        return $this->render('services/services.twig');
    }

    #[Route(path: '/services/{slug}', name: 'services.show', requirements:['slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug): Response
    {
        return $this->render('/services/services.show.twig', [
            'slug' => $slug
        ]);
    }
}

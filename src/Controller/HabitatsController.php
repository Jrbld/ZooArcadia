<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HabitatsController extends AbstractController
{
    #[Route('/habitats', name: 'habitats')]

    public function index(Request $request): Response
    {
        return $this->render('habitats/habitats.twig');
    }

    #[Route(path: '/habitats/{slug}', name: 'habitats.show', requirements:['slug' => '[a-z0-9-]+'])]

    public function show(Request $request, string $slug): Response
    {
        return $this->render('/habitats/habitats.show.twig', [
            'slug' => $slug
        ]);
    }

    #[Route(path: '/habitats/{slug}/{slug2}', name: 'habitats.show.animals', requirements:['slug' => '[a-z0-9-]+', 'slug2' => '[a-z0-9-]+'])]
    
    public function showAnimals(Request $request, string $slug, string $slug2): Response
    {
        return $this->render('/habitats/habitats.show.animals.twig', [
            'slug' => $slug,
            'slug2' => $slug2
        ]);
    }
}

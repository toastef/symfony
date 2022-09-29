<?php

namespace App\Controller; // nom de dommaine auquel appartien le fichir


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController  // abstract va permettre de gerer tous les fichier http
{
    #[Route('/contact', name: 'contact')]
    public function contact()
    {
        return $this->render('pages/contact.html.twig'); // methode venant de l'abstract controller $this->render("")
    }

    #[Route('/testimonials', name: 'testimonials')]
    public function testimonials()
    {
        return $this->render('pages/testimonials.html.twig');
    }

    #[Route('products/{category}', name: 'products')]
    public function products($category)
    {
        return $this->render('pages/products.html.twig', ['category' => $category]);
    }

    #[Route('/team', name: 'team')]
        public function team()
    {
        $team =[                          // Donnée qui vont normalement être récupérée d'une base de donnee
            'Directeur' => 'Jhon Doe',
            'Admin'=> 'Steve Chang',
            'Public relation' => 'Naomi Taylor'
        ];
        return $this->render('pages/team.html.twig', [
            'team'=>$team,
            ]);

    }
}
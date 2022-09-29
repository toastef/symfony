<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact()
    {
        return $this->render('pages/contact.html.twig');
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
}
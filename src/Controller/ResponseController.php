<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResponseController
{

    #[Route('/', name: 'index')]
    public function index() : Response
    {
        return new Response( "<h2>Symfony</h2>");
    }

    #[Route('/about', name: 'about')]
    public function about() :Response
    {
        $_str = "Bonjour et bienvenue!";
        return new Response($_str);
    }

    #[Route('/private/{login}', name: 'private')]
    public function private(string $login) : Response
    {
        return new Response('<h2>Bienvenue ' . $login . ' !</h2>');
    }
}
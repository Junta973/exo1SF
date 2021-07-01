<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="Home")
     */
    public function home()
    {
        return new Response('vous êtes sur la page d\'acceuil');

    }


    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        return new Response('mentions-légales');
    }

}
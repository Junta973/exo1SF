<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="Home")
     */
    public function home()
    {
        // Je retourne une réponse HTTP valide en utilisant la
        // classe Response du composant HTTPfoundation
        return new Response('Acceuil');
    }


    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        return new Response('mentions-légales');
    }

}
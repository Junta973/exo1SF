<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="Home")
     */
    public function home()
    {
        var_dump('Accueil');
        die;
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        var_dump('mentions-legales');
        die;
    }

}
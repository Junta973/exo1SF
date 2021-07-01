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
        $request = Request::createFromGlobals();





    }


    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        return new Response('mentions-légales');
    }

}
<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function articles()
    {
        return new Response('<h3>Vous êtes sur la categorie "articles"</h3>');
    }


    //utilisation de la méthode wildcard
    /**
     * @Route("/articles/{id}", name="articleShow")
     */
    public function articleShhow($id)
    {

        return new Response("<h3>L'id de la page actuelle est : $id</h3>");
    }
}
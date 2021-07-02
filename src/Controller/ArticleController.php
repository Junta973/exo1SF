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
    //renvoi le titre de l'id concerné
    /**
     * @Route("/articles/{id}", name="articleShow")
     */
    public function articleShhow($id)
    {
        $articles = [
            1 => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1
            ],
            2 => [
                "title" => "La vaccination c'est pas trop géniale",
                "content" => "blablablabla",
                "id" => 2
            ],
            3 => [
                "title" => "Balkany c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
            ],
            4 => [
                "title" => "Balkany c'est pas trop génial",
                "content" => "balblalblalb",
                "id" => 4
            ]
        ];

        $article = $articles[$id];
        return new Response($article['title']);
    }


}
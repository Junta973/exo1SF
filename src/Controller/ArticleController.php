<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
                "title" => "AMOKILA",
                "content" => "Application de gestion de projet",
                "id" => 1
            ],
            2 => [
                "title" => "AMOKILA",
                "content" => "Vous pouvez l'utiliser sans modération !",
                "id" => 2
            ],
            3 => [
                "title" => "Digimon",
                "content" => "Anime ou dessin animé pourri",
                "id" => 3
            ],
            4 => [
                "title" => "Digimon ou Pokemon",
                "content" => "La question se pose t-elle vraiment ?",
                "id" => 4
            ]
        ];

        //retourne la page html amokila en fonction de l'id
        return $this->render('amokila.html.twig', [
            'article' => $articles[$id]
        ]);
    }


}
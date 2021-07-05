<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    private $articles = [
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



    /**
     * @Route("/categories/", name="categories")
     */
    public function categories()
    {
        return $this->render('article_categories.html.twig', [
            'articles' => $this->articles
        ]);
    }


    /**
     * @Route("/categories/{id}", name="articleShow")
     */
    public function articleShow($id)
    {
        // j'utilise la méthode render de l'AbstractController
        // pour récupérer un fichier Twig, le transformer en HTML
        // et le renvoyer en réponse HTTP au navigateur
        // Pour utiliser des variables dans le fichier twig, je dois
        // lui passer un tableau en second parametre, avec toutes les
        // variables que je veux utiliser
        return $this->render('articleShow.html.twig', [
            'article' => $this->articles[$id]
        ]);
    }

}
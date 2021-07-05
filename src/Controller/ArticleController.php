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
     * @Route("/list", name="list")
     */
    public function list()
    {
        return $this->render('article_list.html.twig', [
            'articles' => $this->articles
        ]);
    }














    //utilisation de la méthode wildcard
    //renvoi le titre de l'id concerné
    /**
     * @Route("/articles/{id}", name="articleShow")
     */
    public function articleShhow($id)
    {


        //retourne la page html amokila en fonction de l'id
        return $this->render('amokila.html.twig', [
            'article' => $articles[$id]
        ]);
    }


}
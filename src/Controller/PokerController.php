<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController


{
    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {
        $request = Request::createFromGlobals();
        $age = $request->query->get('age');

        if ($age >= 18) {
            return $this->redirectToRoute('digimon');
        } else {
            return $this->redirectToRoute('amokila');
        }
    }

    /**
     * @Route("/digimon", name="digimon")
     */
    public function digimon()
    {
        $request = Request::createFromGlobals();
        {
            return $this->render('digimon.html.twig');
        }
    }


    /**
     * @Route("/amokila", name="amokila")
     */
    public function amokila()
    {
        $request = Request::createFromGlobals();
       {
           return $this->render('amokila.html.twig');
        }
    }
}
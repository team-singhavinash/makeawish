<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyWishesController extends AbstractController
{
    /**
     * @Route("/my-wishes", name="my_wishes")
     */
    public function index()
    {
        return $this->render('my_wishes/index.html.twig', [
            'controller_name' => 'MyWishesController',
        ]);
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}

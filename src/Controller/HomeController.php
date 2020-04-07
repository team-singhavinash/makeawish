<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/my-wishes", name="my-wishes")
     */
    public function myWishes()
    {
        return $this->render('my_wishes/index.html.twig', [
            'controller_name' => 'myWishesController',
        ]);
    }
}

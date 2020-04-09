<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SurpriseBoxController extends AbstractController
{
    /**
     * @Route("/surpriseBox/{wish_id}", name="surpriseBox")
     */
    public function index(int $wish_id)
    {
        // $wish_id = $wish_id;
        return $this->render('surprise_box/index.html.twig', [
            'controller_name' => 'SurpriseBoxController',
        ]);
    }
}

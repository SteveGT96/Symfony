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
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/greeting/{slug}", name="greeting")
     */
    public function greet($slug) {
        return $this->render('home/greet.html.twig', ['name' => $slug]);
    }
}

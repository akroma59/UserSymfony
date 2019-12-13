<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/public", name="public")
     */
    public function public()
    {
        return $this->render('default/public.html.twig', []);
    }

    /**
     * @Route("/private", name="private")
     */
    public function private()
    {
        return $this->render('default/private.html.twig', []);
    }
    
}

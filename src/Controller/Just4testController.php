<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Just4testController extends AbstractController
{
    /**
     * @Route("/welcome-me", name="just4test")
     */
    public function index()
    {
        return $this->render('just4test/index.html.twig', [
            'controller_name' => 'Just4testController',
        ]);
    }
}

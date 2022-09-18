<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeachController extends AbstractController
{
    /**
     * Display the beach tab
     * 
     * @return Response
     * 
     * @Route("/beach", name="beach-index")
     */
    public function index(RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();
        $widget = $session->get('city');

        return $this->render('beach/index.html.twig', [
            'widget' => $widget
        ]);
    }
}

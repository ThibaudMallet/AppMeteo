<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MountainController extends AbstractController
{
    /**
     * Display the Mountain tab
     * 
     * @return Response
     * 
     * @Route("/mountain", name="mountain-index")
     */
    public function index(RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();
        $widget = $session->get('city');
        
        return $this->render('mountain/index.html.twig', [
            'widget' => $widget
        ]);
    }
}

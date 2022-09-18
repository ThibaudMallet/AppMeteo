<?php

namespace App\Controller;

use App\Model\Weather;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * Display the homepage
     * 
     * @return Response
     * 
     * @Route("/", name="main-home")
     */
    public function home(RequestStack $requestStack): Response
    {
        // Get all informations about weather cities
        $weatherCities = Weather::getWeatherData();

        $session = $requestStack->getSession();
        $widget = $session->get('city');
        
        return $this->render('main/home.html.twig', [
            'weatherCities' => $weatherCities,
            'widget' => $widget
        ]);
    }

    /**
     * Add a city in the widget
     *
     * @param RequestStack $requestStack
     * @return Response
     * 
     * @Route("/addCityInWidget/{id}", name="main-addCityInWidget", requirements={"id"="\d+"})
     */
    public function addCityInWidget(int $id, RequestStack $requestStack) :Response
    {
        // Get the city to add
        $weatherCity = Weather::getWeatherByCityIndex($id);

        // use getSession to save the choice
        $session = $requestStack->getSession();
        
        // Get the session or create a new if it's empty
        $widget = $session->get('city', []);

        // If a widget is already exists, i delete it and create a new
        if ($widget) 
        {
            unset($widget);
            $session->set('city', $weatherCity);
        }
        // If it doesn't i just create a new
        else 
        {
            $session->set('city', $weatherCity);
        }

        // Redirect the user at the home page;
        return $this->redirectToRoute(('main-home'));
    }
}

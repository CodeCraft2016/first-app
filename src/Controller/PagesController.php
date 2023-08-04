<?php

namespace App\Controller;

use DateTimeZone;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class PagesController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Declare the path to the GeoLite2-City.mmdb file (database)
        //$GeoLiteDatabasePath = $this->get('kernel')->getRootDir() . '/../private/geolite2-city/GeoLite2-City.mmdb';

    

        
       return $this->render('pages/home.html.twig');
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        
       return $this->render('pages/about.html.twig');
    }
}

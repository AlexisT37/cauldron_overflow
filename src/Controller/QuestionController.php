<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("the text I decided to use. Hack the planet!");
    }


    /**
     * @Route("/country/{country}")
     *
     * @return void
     */
    public function moveToCountry($country)
    {

        $othercountries = [
            'Norway',
            'Iceland',
            'France',
        ];


        return $this->render('country/moveToCountry.html.twig', [
            'country' => "the country I chose is: $country",
            'othercountries' => $othercountries,
        ]);
    }
}

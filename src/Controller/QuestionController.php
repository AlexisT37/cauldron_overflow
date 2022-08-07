<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("the text I decided to use. Hack the planet!");
    }


    /**
     * @Route("/{slug}")
     *
     * @return void
     */
    public function moveToFinland($slug)
    {
        return new Response(sprintf('We are moving to %s with Shashou !', $slug));
    }
}

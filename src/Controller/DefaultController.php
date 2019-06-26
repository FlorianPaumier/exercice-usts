<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/", name="homepage")
     * Show all articles
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return new Response("Hello World !");
    }
}

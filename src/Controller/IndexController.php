<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


  /**
     * @Route("/", name="index")
     */
    
class IndexController extends FOSRestController
{
/**
   * Lists all Movies.
   * @Rest\Get("/")
   *
   * @return JsonResponse
   */
    public function index()
    {

        $all_articles = $this->getDoctrine()
        ->getRepository(Article::class)
        ->findAll();     
        //  return $this->json([
        //      'code' => '0',
        //      'data' => $all_articles
        //  ]);
        return $this->handleView($this->view($all_articles));
    }
       
   }


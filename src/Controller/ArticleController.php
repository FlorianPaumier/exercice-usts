<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController extends FOSRestController
{
/**
   * 
   *  @Route("/article/{id}", name="article")
   *
   * @return JsonResponse
   */
    public function index($id)
    {
        $article = $this->getDoctrine()
        ->getRepository(Article::class)
        ->findBy(['id'=>$id]);
        return $this->handleView($this->view($article));
    }
}
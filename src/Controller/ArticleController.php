<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(ArticleRepository $repository)
    {
        $articles = $repository->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $articles
        ]);
    }
    /**
     * @Route("/article/{id}", name="show_article")
     */
    public function showArticle(Article $article){
        return $this->render('article/show.html.twig',[
            'article' => $article
        ]);
    }
}

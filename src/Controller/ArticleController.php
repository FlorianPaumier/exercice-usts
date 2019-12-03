<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Tag;
use App\Repository\ArticleRepository;
use App\Form\ArticleType;

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
     * @Route("/article/add", name="add_article")
     */
    public function addArticle(Request $request){
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($article);
            $manager->flush();

            return $this->RedirectToRoute('show_article', ['id' => $article->getId()]);
        }

        return $this->render('article/add.html.twig', [
            'formArticle' => $form->createView()
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
    /**
     * @Route("/article/update/{id}", name="update_article")
     */
    public function updateArticle(Request $request, Article $article){
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($article);
            $manager->flush();
            
            return $this->RedirectToRoute('show_article', ['id' => $article->getId()]);
        }

        return $this->render('article/update.html.twig', [
            'article' => $article,
            'formArticle' => $form->createView()
        ]);
    }
}

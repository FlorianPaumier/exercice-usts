<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Controller\EmailController;

class ArticleController extends AbstractController
{

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/", name="homepage")
     * Show all articles
     */

    public function indexAction()
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->findAll();
        $serializer = $this->serializer->serialize($article, "json");
        return new Response($serializer);
    }

    /**
     * @Route("/article/{id}", name="findOneArticle", methods={"GET"})
     * Show one article
     */

    public function findOneArticleAction($id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $serializer = $this->serializer->serialize($article, "json");
        return new Response($serializer);
    }

    /**
     * @Route("/create", name="createArticle", methods={"POST"})
     * Create article
     */

    public function createArticleAction(Request $request, EmailController $email, ArticleRepository $articleRepo)
    {
        $article = $articleRepo->findOneBy(["title"=> $request->request->get("title")]);

        if($article) {
            $serializer = $this->serializer->serialize("Article title exist", "json");
            return new Response($serializer, 400);  
        }

        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $article = new Article();
        $article->setTitle($data["title"]);
        $article->setCategory($data["category"]);
        $article->setContent($data["content"]);
        $article->setImage($data["image"]);
        $article->setTags($data["tags"]);
        $email->indexAction($data["email"]);
        $entityManager->persist($article);
        $entityManager->flush();
        return new JsonResponse("The article created !",200);
    }

    /**
     * @Route("/edit/{id}", name="editArticle", methods={"POST"})
     * Edit one article
     */

    public function updateArticleAction(Request $request, $id, ArticleRepository $articleRepo)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $article->setTitle($data["title"]);
        $article->setContent($data["content"]);
        $article->setCategory($data["category"]);
        $article->setImage($data["image"]);
        $article->setTags($data["tags"]);
        $entityManager->persist($article);
        $entityManager->flush();
        return new JsonResponse("The article updated !", 200);
    }

    /**
     * @Route("/delete/{id}", name="deleteArticle", methods={"DELETE"})
     * Delete one article
     */

    public function deleteArticleAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $entityManager->remove($article);
        $entityManager->flush();
        return new JsonResponse("The article deleted !");
    }
}


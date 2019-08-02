<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Category;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CategoryRepository;

class CategoryController extends AbstractController
{

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route("/category", name="showCategory", methods={"GET"})
     * Show one article
     */

    public function indexAction()
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $serializer = $this->serializer->serialize($category, "json");
        return new Response($serializer);    
    }

    /**
     * @Route("/category", name="createCategory", methods={"POST"})
     * Show one article
     */

    public function createCategorieAction(Request $request, CategoryRepository $categoryRepo)
    {
        $category = $categoryRepo->findOneBy(["name"=> $request->request->get("name")]);

        if($category) {
            $serializer = $this->serializer->serialize("Category exist", "json");
            return new Response($serializer, 400);  
        }
        $entityManager = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setName($request->request->get("name"));
        $entityManager->persist($category);
        $entityManager->flush();
        $serializer = $this->serializer->serialize($category, "json");
        return new Response($serializer);    
    }
}

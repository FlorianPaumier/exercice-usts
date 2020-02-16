<?php


namespace App\Controller;

use App\Entity\Tag;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Article;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Get("/articles")
     * name = "app_articles_show",
     * @View
     */
    public function showAllArticle(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();
        return $this->json($articles, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Get(
     *     path = "/articles/{id}",
     *     name = "app_article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function showArticle(Article $article)
    {
        return $this->json($article, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Delete(
     *    path = "/articles/{id}",
     *    name = "app_article_Delete",
     *    requirements = {"id"="\d+"}
     * )
     * @View
     */

    public function deleteArticle(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return $this->json($article, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Post(
     *    path = "/articles",
     *    name = "app_article_create"
     * )
     * @View(StatusCode = 201)
     */
    public function addArticle(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = new Article;
        $article->setTitle($request->get('title'));
        $article->setContent($request->get('content'));
        $article->setImage($request->get('image'));
        $category = new Category();
        $categoryJson = $request->get('category');
        $isCategoryHasName = array_key_exists("name",$categoryJson);
        if($categoryJson && $isCategoryHasName){
            $category->setName($categoryJson["name"]);
            $em->persist($category);
            $em->flush();
            $article->setCategory($category);
        }
        $tags = $request->get('tags');
        foreach( $tags as $elem ) {
            $tag = new Tag();
            $tag->setNom($elem["nom"]);
            $em->persist($tag);
            $em->flush();
            $article->addTag($tag);
        }
        $em->persist($article);
        $em->flush();
        return $this->json($article, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Put(
     *    path = "/articles/{id}",
     *    name = "app_article_update"
     * )
     * @View(StatusCode = 201)
     */
    public function UpdateArticle(Request $request,ArticleRepository $articleRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $articleRepository->find($request->get('id'));
        $article->setTitle($request->get('title'));
        $article->setContent($request->get('content'));
        $article->setImage($request->get('image'));
        $category = new Category();
        $categoryJson = $request->get('category');
        $isCategoryHasName = array_key_exists("name",$categoryJson);
        if($categoryJson && $isCategoryHasName){
            $category->setName($categoryJson["name"]);
            $em->persist($category);
            $em->flush();
            $article->setCategory($category);
        }
        $tags = $request->get('tags');
        if($tags){
            $article->removeAllTag();
        }
        foreach( $tags as $elem ) {
            $tag = new Tag();
            $tag->setNom($elem["nom"]);
            $em->persist($tag);
            $em->flush();
            $article->addTag($tag);
        }
        $em->persist($article);
        $em->flush();
        return $this->json($article, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Get(
     *     path = "/articles/{id}/categories",
     *     name = "app_category_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function showCategory(Article $article)
    {
        $category = $article->getCategory();
        return $this->json($category, 200, [], [
            'groups' => ['main'],
        ]);
    }

    /**
     * @Get("/articles/{id}/categories")
     * name = "app_categories_show",
     * @View
     */
    public function showAllCategory(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findAll();
        return $this->json($categories, 200, [], [
            'groups' => ['main'],
        ]);
    }
}
<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Articles extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 1; $i++) {
            $cateory1 = new Category();
            $cateory1->setName("Development");
            $manager->persist( $cateory1);
            $manager->flush();
            $cateogrys[] = $cateory1;
        }
        for ($i = 0; $i < 1; $i++) {
            $cateory2 = new Category();
            $cateory2->setName("Accounting");
            $manager->persist( $cateory2);
            $manager->flush();
            $cateogrys[] = $cateory2;
        }

        for ($i = 0; $i < 1; $i++) {
            $cateory3 = new Category();
            $cateory3->setName("Technology");
            $manager->persist( $cateory3);
            $manager->flush();
            $cateogrys[] = $cateory3;
        }

        for ($i = 0; $i < 1; $i++) {
            $cateory4 = new Category();
            $cateory4->setName("Media & News");
            $manager->persist( $cateory4);
            $manager->flush();
            $cateogrys[] = $cateory4;
        }
        for ($i = 0; $i < 1; $i++) {
            $cateory5 = new Category();
            $cateory5->setName("Medical");
            $manager->persist( $cateory5);
            $manager->flush();
            $cateogrys[] = $cateory5;
        }

        for ($i = 0; $i < 1; $i++) {
            $cateory6 = new Category();
            $cateory6->setName("Goverment");
            $manager->persist( $cateory6);
            $manager->flush();
            $cateogrys[] = $cateory6;
        }


        for ($i = 0; $i <10; $i++)
        {
            $article = new Article();
            $article->setTitle($faker->jobTitle);
            $article->setContent($faker->realText(200));
            $article->setImage($faker->image(__DIR__.'/images','109','69'));

            $manager->persist($article);
            $manager->flush();
        }
    }
}

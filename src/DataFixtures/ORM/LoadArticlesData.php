<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Article;

class LoadArticlesData extends Fixture
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 10; $i++) {
            $article = new Article();
            $category = (new Category())->setName("Category".$i);
            $article
                ->setTitle('Article ' . $i)
                ->setContent('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet, mauris vitae tincidunt lacinia, nunc sem condimentum sem, ultrices lobortis purus odio vitae metus. Nulla eget bibendum odio, eget aliquet dui. Aenean tincidunt neque ligula, sit amet volutpat ex ullamcorper ut. Donec convallis, justo sit amet pharetra gravida, lorem velit dapibus quam, quis pharetra nisl mi sit amet ligula. Mauris posuere pellentesque viverra. Phasellus ut nunc sed dui scelerisque porta. Phasellus nulla turpis, convallis sed ullamcorper sit amet, eleifend sed libero. Suspendisse potenti. Duis interdum vel enim vitae efficitur. Donec tincidunt ultrices dolor eu eleifend.</p><p>Proin accumsan erat et aliquam consequat. Ut sed fermentum ligula, a malesuada felis. Aliquam iaculis finibus est a pretium. Nunc vel commodo erat. Vivamus ac bibendum ex. Sed efficitur facilisis augue ut auctor. Aliquam sodales in massa nec tempor. Maecenas fringilla est non tristique malesuada. Ut sodales pretium pellentesque.</p><p>Etiam placerat tortor vel elit placerat, eu facilisis ligula congue. Sed pulvinar, lacus a feugiat pellentesque, enim augue cursus ex, ullamcorper dapibus justo justo in eros. Phasellus cursus, leo in elementum semper, lectus massa pellentesque nulla, vitae vehicula dui ipsum sit amet quam. Morbi tincidunt metus vel dignissim pharetra. Vivamus sollicitudin, felis vitae consectetur tempus, turpis velit placerat ipsum, at lacinia nunc arcu eget ex. Proin sollicitudin augue sem, eu rhoncus diam pulvinar et. Vivamus at orci ante. Donec ac nunc purus. Vivamus pretium dolor vel laoreet sollicitudin. Curabitur finibus odio sed efficitur finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam varius diam iaculis cursus imperdiet. Nullam sed hendrerit quam. Aenean vitae erat a justo sollicitudin molestie non nec enim. Aliquam varius pellentesque convallis.</p><p>Donec luctus mauris id consequat hendrerit. In elementum est ac enim convallis euismod. Ut vitae augue eget enim luctus convallis. Sed arcu erat, malesuada ac tortor quis, pharetra volutpat orci. Donec non mauris eu purus elementum lacinia ac et ex. Ut rutrum turpis libero, vitae cursus dui tristique et. Mauris nec massa sed ligula pretium lacinia. Donec sed dapibus quam. Quisque sollicitudin quam sit amet dictum commodo. Aenean tristique, lorem id ullamcorper viverra, lacus sem rhoncus nulla, ut suscipit dolor urna eu lorem. Integer vestibulum, nisi at ultrices sodales, libero eros mollis nulla, ac blandit mauris nibh vel massa. Pellentesque a porta metus. Nulla blandit arcu ut justo pellentesque, et egestas risus tempus.</p><p>Phasellus vitae eros lorem. Praesent malesuada lectus a eleifend suscipit. Duis consectetur, ligula eu vulputate viverra, tortor turpis laoreet elit, eu hendrerit tortor ligula ut libero. Mauris interdum imperdiet eros, in gravida nunc consequat hendrerit. Proin non erat vel lorem rhoncus accumsan id ut arcu. Donec fermentum est at fermentum tincidunt. Fusce at cursus est. Aenean suscipit ante dolor, vel varius diam iaculis vel. Proin id libero metus. Praesent vehicula consequat mauris, id eleifend ex rutrum sed.</p>')
                ->setImage('cheminee.png')
                ->setCategory($category);
            ;

            $manager->persist($category);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Tag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextAreaType::class)
            ->add('image', TextType::class)
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => function ($category) {
                    return $category->getName();
                }
            ])
            ->add('tag', EntityType::class, [ 
                'class' => Tag::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => function ($tag) {
                    return $tag->getName();
                },
                'label'     => 'Tags : ',
                'expanded'  => true,
                'multiple'  => true,
            ])
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

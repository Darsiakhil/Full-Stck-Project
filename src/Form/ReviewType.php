<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Course;
use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('fk_user_id', EntityType::class, [ "attr" => ["class" => "mb-3"],
                'class' => User::class,
                'choice_label' => 'firstName',
                'label' => 'User:'
            ])
            ->add('fk_course_id', EntityType::class, [ "attr" => ["class" => "mb-3"],
                'choice_label' => 'name',
                'class' => Course::class,
                'label' => 'Course:'
            ])
            ->add('content', TextareaType::class, [ "attr" => ["style" => "width: 300px"],
                'label' => ' '
            ])
            ->add('Add', SubmitType::class, [ "attr" => ["class" => "btn btn-dark mt-3 mb-5"],
                'label' => 'Add Review'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}

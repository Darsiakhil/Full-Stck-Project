<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Course;
use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('fk_user_id', EntityType::class, [
                'class' => User::class,
            ])
            ->add('fk_course_id', EntityType::class, [
                'label' => 'Course',
                'class' => Course::class,
            ])
            ->add('content', TextType::class, [
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}

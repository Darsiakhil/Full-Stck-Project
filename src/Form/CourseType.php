<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('description', TextType::class, ["attr" => ["placeholder" => "Description", "class" => "form-control m-1"]])
            ->add('start_date', DateTimeType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('end_date', DateTimeType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('price', NumberType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('capacity', NumberType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('available', ChoiceType::class, [
                'choices' => [
                    'Yes' => "1",
                    'No' => "0",
                ], "attr" => ["class" => "form-select m-1"]
            ])
            // ->add('review')
            // ->add('fk_trainer_id')
=======
            ->add('name',null, ["attr" => ["class" => "form-control m-3"]])
            ->add('description', null, ["attr" => ["class" => "form-control m-3", "placeholder" => "The Description"]])
            ->add('start_date')
            ->add('end_date' )
            ->add('price', null, ["attr" => ["class" => "form-control m-3"]])
            ->add('capacity', null, ["attr" => ["class" => "form-control m-3"]])
            ->add('available', null, ["attr" => ["class" => "form-select m-3"]])
            ->add('img')
            ->add('review')
            ->add('fk_trainer_id')
>>>>>>> 1ec1374e53d4d570451ad407be2c332e122e3371
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}

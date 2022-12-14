<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\Trainer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;


class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["attr" => ["placeholder" => "Course Name", "class" => "form-control m-1"]])
            ->add('description', TextType::class, ["attr" => ["placeholder" => "Description", "class" => "form-control m-1"]])
            ->add('start_date', DateTimeType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('end_date', DateTimeType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('price', NumberType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('image', FileType::class, [
                "attr" => ["placeholder" => "Image", "class" => "form-control m-1"],
                "mapped" => false,
                "required" => false,
            ])
            ->add('capacity', NumberType::class, ["attr" => ["class" => "form-control m-1"]])
            ->add('available', ChoiceType::class, [
                'required' => false,
                'placeholder' => "Yes",
                'empty_data' => "1",
                'choices' => [
                    'Yes' => "1",
                    'No' => "0",
                ], "attr" => ["class" => "form-select m-1"]
            ])
            // ->add('review')

            ->add('fk_trainer_id', EntityType::class, [
                // looks for choices from this entity
                "attr" => ["class" => "form-control m-1"],
                'class' => Trainer::class,

                // uses the User.username property as the visible option string
                'choice_label' => 'name',

                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}

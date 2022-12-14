<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Course;
use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('booking_date', DateTimeType::class, [
                'date_label' => new \DateTime()
            ])
            ->add('fk_user_id', EntityType::class, [
                'class' => User::class,
                'choice_label' => "id"
            ])
            ->add('fk_course_id', EntityType::class, [
                'label' => 'Course',
                'class' => Course::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}

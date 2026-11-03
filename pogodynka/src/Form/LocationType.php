<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city',  null, ['attr' => ['placeholder' => 'Enter city name'],])
            ->add('country', choiceType::class, ['choices' => [
                'Poland' => 'PL',
                'Germany' => 'DE',
                'Japan' => 'JP',
                'Italy' => 'IT',
                'Canada' => 'CA',
                'China' => 'CN',
    ],])
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}

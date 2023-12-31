<?php

namespace App\Form;

use App\Entity\Vehicules;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddVehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('marque')
            ->add('modele')
            ->add('description')
            ->add('photo')
            ->add('prix_journee')
            ->add('date_enregistrement');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicules::class,
        ]);
    }
}

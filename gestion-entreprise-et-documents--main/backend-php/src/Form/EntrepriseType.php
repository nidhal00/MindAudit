<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('matriculeFiscale')
            ->add('secteur')
            ->add('taille')
            ->add('pays')
            ->add('email')
            ->add('telephone')
            ->add('adresse')
            ->add('dateCreation')
            ->add('statut')
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
            'attr' => ['novalidate' => 'novalidate'], // Force server-side validation
        ]);
    }
}

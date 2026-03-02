<?php

namespace App\Form;

use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationEntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'entreprise',
                'attr' => ['placeholder' => 'Ex: MindAudit Consulting']
            ])
            ->add('matriculeFiscale', TextType::class, [
                'label' => 'Matricule Fiscale',
                'attr' => ['placeholder' => 'Ex: 1234567/A/B/C/000']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email de contact',
                'attr' => ['placeholder' => 'contact@entreprise.com']
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone',
                'attr' => ['placeholder' => '+216 ...']
            ])
            ->add('secteur', ChoiceType::class, [
                'label' => 'Secteur d\'activité',
                'choices' => [
                    'Technologie & IT' => 'Technologie',
                    'Finance & Banque' => 'Finance',
                    'Santé & Bien-être' => 'Santé',
                    'Industrie & BTP' => 'Industrie',
                    'Autre' => 'Autre',
                ],
                'placeholder' => 'Choisir un secteur...',
            ])
            ->add('taille', ChoiceType::class, [
                'label' => 'Taille de l\'entreprise',
                'choices' => [
                    'Petite (Small)' => Entreprise::TAILLE_SMALL,
                    'Moyenne (Medium)' => Entreprise::TAILLE_MEDIUM,
                    'Grande (Large)' => Entreprise::TAILLE_LARGE,
                ],
            ])
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'attr' => ['placeholder' => 'Ex: Tunisie, France...']
            ])
            ->add('adresse', TextareaType::class, [
                'label' => 'Adresse complète',
                'attr' => ['rows' => 3, 'placeholder' => 'Numéro, Rue, Ville...']
            ])
            ->add('dateCreation', DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}

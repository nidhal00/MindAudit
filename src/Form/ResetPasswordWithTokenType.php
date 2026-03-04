<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ResetPasswordWithTokenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('token', TextType::class, [
                'label' => 'Code de réinitialisation',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Collez ici le code reçu par email'],
                'constraints' => [
                    new Assert\NotBlank(message: 'Le code est requis'),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options' => ['label' => 'Nouveau mot de passe'],
                'second_options' => ['label' => 'Confirmer le mot de passe'],
                'constraints' => [
                    new Assert\NotBlank(message: 'Le mot de passe ne peut pas être vide'),
                    new Assert\Length(min: 8, minMessage: 'Le mot de passe doit contenir au moins 8 caractères'),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => '🔐 Définir mon nouveau mot de passe',
                'attr' => ['class' => 'btn btn-primary w-100']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'mapped' => false,
        ]);
    }
}

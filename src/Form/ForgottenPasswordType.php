<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ForgottenPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Adresse email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'votre@email.com',
                    'autocomplete' => 'email',
                ],
                'constraints' => [
                    new Assert\NotBlank(message: 'L\'email est obligatoire'),
                    new Assert\Email(message: 'L\'email est invalide'),
                ]
            ])
            ->add('send_link', SubmitType::class, [
                'label' => '📧 Envoyer le lien de réinitialisation',
                'attr' => [
                    'class' => 'btn btn-primary w-100',
                ]
            ])
            ->add('send_code', SubmitType::class, [
                'label' => '🔢 Envoyer le code par email',
                'attr' => [
                    'class' => 'btn btn-outline-secondary w-100 mt-2',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'mapped' => false,
        ]);
    }
}


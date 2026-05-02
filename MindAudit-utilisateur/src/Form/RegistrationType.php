<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom de famille'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'exemple@email.com'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'L\'email est obligatoire',
                        'groups' => ['registration']
                    ]),
                    new Assert\Email([
                        'message' => 'L\'email {{ value }} n\'est pas valide',
                        'groups' => ['registration']
                    ])
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Minimum 7 caractères'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le mot de passe est obligatoire',
                        'groups' => ['registration']
                    ]),
                    new Assert\Length([
                        'min' => 7,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                        'groups' => ['registration']
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'validation_groups' => ['registration'],
        ]);
    }
}
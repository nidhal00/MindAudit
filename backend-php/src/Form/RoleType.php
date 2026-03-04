<?php

namespace App\Form;

use App\Entity\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du rôle',
                'attr' => [
                    'placeholder' => 'Ex: Administrateur, Auditeur, Manager...',
                    'class' => 'form-control',
                    'maxlength' => 100,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du rôle est obligatoire.']),
                    new Assert\Length([
                        'min' => 2, 'max' => 100,
                        'minMessage' => 'Le nom du rôle doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom du rôle ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s\-\_]+$/',
                        'message' => 'Le nom du rôle ne doit contenir que des lettres, espaces et tirets.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Description du rôle et de ses responsabilités...',
                    'class' => 'form-control',
                    'maxlength' => 500,
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('permissions', ChoiceType::class, [
                'label' => 'Permissions',
                'choices' => [
                    'Gestion des utilisateurs' => [
                        'Créer des utilisateurs' => 'user.create',
                        'Modifier des utilisateurs' => 'user.edit',
                        'Supprimer des utilisateurs' => 'user.delete',
                        'Voir les utilisateurs' => 'user.view',
                    ],
                    'Gestion des rôles' => [
                        'Créer des rôles' => 'role.create',
                        'Modifier des rôles' => 'role.edit',
                        'Supprimer des rôles' => 'role.delete',
                        'Voir les rôles' => 'role.view',
                    ],
                    'Gestion des entreprises' => [
                        'Créer des entreprises' => 'entreprise.create',
                        'Modifier des entreprises' => 'entreprise.edit',
                        'Supprimer des entreprises' => 'entreprise.delete',
                        'Voir les entreprises' => 'entreprise.view',
                    ],
                    'Gestion des documents' => [
                        'Créer des documents' => 'document.create',
                        'Modifier des documents' => 'document.edit',
                        'Supprimer des documents' => 'document.delete',
                        'Voir les documents' => 'document.view',
                    ],
                    'Gestion des audits' => [
                        'Créer des audits' => 'audit.create',
                        'Modifier des audits' => 'audit.edit',
                        'Supprimer des audits' => 'audit.delete',
                        'Voir les audits' => 'audit.view',
                        'Générer des rapports' => 'audit.report',
                    ],
                    'Administration' => [
                        'Accès administration' => 'admin.access',
                        'Configuration système' => 'admin.config',
                    ],
                ],
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Role::class,
        ]);
    }
}

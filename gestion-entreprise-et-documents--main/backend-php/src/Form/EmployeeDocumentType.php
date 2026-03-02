<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class EmployeeDocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du document',
                'attr' => ['placeholder' => 'Ex: Bilan financier 2024']
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de document',
                'choices' => [
                    'Certification ISO' => Document::TYPE_ISO,
                    'Document Fiscal' => Document::TYPE_FISCAL,
                    'Ressources Humaines' => Document::TYPE_RH,
                    'États Financiers' => Document::TYPE_FINANCIER,
                ]
            ])
            ->add('imageFile', VichFileType::class, [
                'label' => 'Fichier (PDF, JPG, PNG)',
                'required' => true,
                'allow_delete' => false,
                'download_uri' => false,
                'asset_helper' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}

<?php


namespace Aropixel\SyliusBlockPlugin\Form\Type;

use Aropixel\SyliusBlockPlugin\Entity\BlockCategory;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\CKEditorBundle\Form\Type\CKEditorType;


class BlockType extends AbstractResourceType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'aropixel.form.block.title',
            ])

            ->add('code', TextType::class, [
                'label' => 'Code'
            ])

            ->add('category', EntityType::class, [
                'label' => "Catégorie",
                'class' => BlockCategory::class,
                'choice_label' => 'title'
            ])

            ->add('content', CKEditorType::class, [
                'label' => 'Contenu'
            ])

            ->add('enabled', CheckboxType::class, [
                'label' => 'aropixel.form.block.enabled',
            ])

        ;
    }

    public function getBlockPrefix() {
        return 'aropixel_block';
    }
}

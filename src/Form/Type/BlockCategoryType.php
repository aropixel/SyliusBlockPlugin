<?php


namespace Aropixel\SyliusBlockPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class BlockCategoryType extends AbstractResourceType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'aropixel.form.block_category.title',
                'required' => true
            ])

            ->add('enabled', CheckboxType::class, [
                'label' => 'aropixel.form.block_category.enabled'
            ])

        ;
    }

    public function getBlockPrefix() {
        return 'aropixel_block_category';
    }
}

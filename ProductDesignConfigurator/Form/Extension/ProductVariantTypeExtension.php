<?php

namespace App\Petro\ProductDesignConfigurator\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductVariantType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductVariantTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('spatialModel', CheckboxType::class, [
            'label' => 'petro_sylius_product_design_configurator_plugin.ui.spatial_model',
        ]);
    }

    public function getExtendedTypes(): iterable
    {
        return [ProductVariantType::class];
    }
}

<?php

declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('petro_sylius_product_design_configurator_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}

<?php

declare(strict_types=1);

namespace App\Petro\ProductDesignConfigurator\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('evozon_sylius_product_design_configurator_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}

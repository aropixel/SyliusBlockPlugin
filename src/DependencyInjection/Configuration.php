<?php

declare(strict_types=1);

namespace Aropixel\SyliusBlockPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('aropixel_sylius_block_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}

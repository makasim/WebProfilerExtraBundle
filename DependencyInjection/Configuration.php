<?php

/*
 * (c) Vincent Bouzeran <vincent.bouzeran@elao.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elao\WebProfilerExtraBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('web_profiler_extra');

        $rootNode
            ->children()
                ->arrayNode('routing')->canBeDisabled()->end()
                ->arrayNode('container')->canBeDisabled()->end()
                ->arrayNode('assetic')->canBeDisabled()->end()
                ->arrayNode('twig')->canBeDisabled()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}

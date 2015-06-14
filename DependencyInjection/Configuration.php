<?php

/*
 * This file is part of the SBPushbulletBundle.
 *
 * (c) Stefan Braspenning <stefan.braspenning@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SB\Bundle\PushbulletBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Stefan Braspenning <stefan.braspenning@outlook.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sb_pushbullet');

        $rootNode
            ->children()
                ->scalarNode('api_token')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}

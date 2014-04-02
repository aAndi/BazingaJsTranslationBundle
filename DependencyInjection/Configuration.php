<?php

namespace Bazinga\Bundle\JsTranslationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * @author William DURAND <william.durand1@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $builder->root('bazinga_js_translation')
            ->children()
                ->scalarNode('locale_fallback')->defaultValue('en')->end()
                ->scalarNode('default_domain')->defaultValue('messages')->end()
                ->arrayNode('available_locales')
                    ->info('List of available locales')
                    ->example('[en, fr]')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        return $builder;
    }
}

<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolInvalidateTagsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.cache_pool_invalidate_tags' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolInvalidateTagsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.cache_pool_invalidate_tags'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolInvalidateTagsCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cache.app' => ['privates', 'cache.app.taggable', 'getCache_App_TaggableService', true],
            'doctrine.result_cache_pool' => ['privates', '.doctrine.result_cache_pool.taggable', 'get_Doctrine_ResultCachePool_TaggableService', true],
            'doctrine.system_cache_pool' => ['privates', '.doctrine.system_cache_pool.taggable', 'get_Doctrine_SystemCachePool_TaggableService', true],
        ], [
            'cache.app' => 'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter',
            'doctrine.result_cache_pool' => 'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter',
            'doctrine.system_cache_pool' => 'Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter',
        ]));

        $instance->setName('cache:pool:invalidate-tags');
        $instance->setDescription('Invalidate cache tags for all or a specific pool');

        return $instance;
    }
}

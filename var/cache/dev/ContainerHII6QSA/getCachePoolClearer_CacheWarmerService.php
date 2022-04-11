<?php

namespace ContainerHII6QSA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCachePoolClearer_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cache_pool_clearer.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\CachePoolClearerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/CachePoolClearerCacheWarmer.php';

        return $container->privates['cache_pool_clearer.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\CachePoolClearerCacheWarmer(($container->services['cache.system_clearer'] ?? $container->load('getCache_SystemClearerService')), [0 => 'cache.validator', 1 => 'cache.serializer']);
    }
}

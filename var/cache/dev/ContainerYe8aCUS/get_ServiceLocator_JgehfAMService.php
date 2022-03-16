<?php

namespace ContainerYe8aCUS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JgehfAMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jgehfAM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jgehfAM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ficheFraisRepository' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
        ], [
            'ficheFraisRepository' => 'App\\Repository\\FicheFraisRepository',
        ]);
    }
}

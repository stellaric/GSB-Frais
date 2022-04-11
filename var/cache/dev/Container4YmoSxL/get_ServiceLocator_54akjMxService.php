<?php

namespace Container4YmoSxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_54akjMxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.54akjMx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.54akjMx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ficheFrais' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
            'visiteur' => ['privates', 'App\\Repository\\VisiteurRepository', 'getVisiteurRepositoryService', true],
        ], [
            'ficheFrais' => 'App\\Repository\\FicheFraisRepository',
            'visiteur' => 'App\\Repository\\VisiteurRepository',
        ]);
    }
}
<?php

namespace Container4YmoSxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RupqPtLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RupqPtL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RupqPtL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fraisForfaitRepository' => ['privates', 'App\\Repository\\FraisForfaitRepository', 'getFraisForfaitRepositoryService', true],
        ], [
            'fraisForfaitRepository' => 'App\\Repository\\FraisForfaitRepository',
        ]);
    }
}

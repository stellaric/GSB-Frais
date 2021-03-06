<?php

namespace ContainerHII6QSA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UEb2OCmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uEb2OCm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uEb2OCm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fraisForfait' => ['privates', '.errored..service_locator.uEb2OCm.App\\Entity\\FraisForfait', NULL, 'Cannot autowire service ".service_locator.uEb2OCm": it references class "App\\Entity\\FraisForfait" but no such service exists.'],
            'fraisForfaitRepository' => ['privates', 'App\\Repository\\FraisForfaitRepository', 'getFraisForfaitRepositoryService', true],
        ], [
            'fraisForfait' => 'App\\Entity\\FraisForfait',
            'fraisForfaitRepository' => 'App\\Repository\\FraisForfaitRepository',
        ]);
    }
}

<?php

namespace ContainerHII6QSA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JaJqOSCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jaJqOSC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jaJqOSC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneFraisHorsForfait' => ['privates', '.errored..service_locator.jaJqOSC.App\\Entity\\LigneFraisHorsForfait', NULL, 'Cannot autowire service ".service_locator.jaJqOSC": it references class "App\\Entity\\LigneFraisHorsForfait" but no such service exists.'],
        ], [
            'ligneFraisHorsForfait' => 'App\\Entity\\LigneFraisHorsForfait',
        ]);
    }
}

<?php

namespace ContainerYe8aCUS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z7D4XtTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z7D4XtT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z7D4XtT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'visiteur' => ['privates', '.errored..service_locator.Z7D4XtT.App\\Entity\\Visiteur', NULL, 'Cannot autowire service ".service_locator.Z7D4XtT": it references class "App\\Entity\\Visiteur" but no such service exists.'],
        ], [
            'visiteur' => 'App\\Entity\\Visiteur',
        ]);
    }
}

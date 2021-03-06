<?php

namespace ContainerYe8aCUS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K8qoXGPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K8qoXGP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K8qoXGP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'etat' => ['privates', '.errored..service_locator.K8qoXGP.App\\Entity\\Etat', NULL, 'Cannot autowire service ".service_locator.K8qoXGP": it references class "App\\Entity\\Etat" but no such service exists.'],
            'etatRepository' => ['privates', 'App\\Repository\\EtatRepository', 'getEtatRepositoryService', true],
        ], [
            'etat' => 'App\\Entity\\Etat',
            'etatRepository' => 'App\\Repository\\EtatRepository',
        ]);
    }
}

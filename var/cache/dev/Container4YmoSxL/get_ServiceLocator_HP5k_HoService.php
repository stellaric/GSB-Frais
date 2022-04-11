<?php

namespace Container4YmoSxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HP5k_HoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HP5k.Ho' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HP5k.Ho'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneFraisForfait' => ['privates', '.errored..service_locator.HP5k.Ho.App\\Entity\\LigneFraisForfait', NULL, 'Cannot autowire service ".service_locator.HP5k.Ho": it references class "App\\Entity\\LigneFraisForfait" but no such service exists.'],
        ], [
            'ligneFraisForfait' => 'App\\Entity\\LigneFraisForfait',
        ]);
    }
}

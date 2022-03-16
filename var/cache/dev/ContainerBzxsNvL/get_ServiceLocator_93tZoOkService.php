<?php

namespace ContainerBzxsNvL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_93tZoOkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.93tZoOk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.93tZoOk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneFraisHorsForfait' => ['privates', '.errored..service_locator.93tZoOk.App\\Entity\\LigneFraisHorsForfait', NULL, 'Cannot autowire service ".service_locator.93tZoOk": it references class "App\\Entity\\LigneFraisHorsForfait" but no such service exists.'],
            'ligneFraisHorsForfaitRepository' => ['privates', 'App\\Repository\\LigneFraisHorsForfaitRepository', 'getLigneFraisHorsForfaitRepositoryService', true],
        ], [
            'ligneFraisHorsForfait' => 'App\\Entity\\LigneFraisHorsForfait',
            'ligneFraisHorsForfaitRepository' => 'App\\Repository\\LigneFraisHorsForfaitRepository',
        ]);
    }
}

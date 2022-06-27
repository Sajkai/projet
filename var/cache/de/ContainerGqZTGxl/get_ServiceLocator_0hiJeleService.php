<?php

namespace ContainerGqZTGxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0hiJeleService extends App_KernelDeDebugContainer
{
    /**
     * Gets the private '.service_locator.0hiJele' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0hiJele'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rentRepository' => ['privates', 'App\\Repository\\RentRepository', 'getRentRepositoryService', true],
        ], [
            'rentRepository' => 'App\\Repository\\RentRepository',
        ]);
    }
}
<?php

namespace ContainerGqZTGxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z4aLW7NService extends App_KernelDeDebugContainer
{
    /**
     * Gets the private '.service_locator.z4aLW7N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z4aLW7N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rentRepository' => ['privates', 'App\\Repository\\RentRepository', 'getRentRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'rentRepository' => 'App\\Repository\\RentRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}

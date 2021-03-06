<?php

namespace ContainerKeVz00O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BjdZWkHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BjdZWkH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BjdZWkH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'carTypeRepository' => ['privates', 'App\\Repository\\CarTypeRepository', 'getCarTypeRepositoryService', true],
        ], [
            'carRepository' => 'App\\Repository\\CarRepository',
            'carTypeRepository' => 'App\\Repository\\CarTypeRepository',
        ]);
    }
}

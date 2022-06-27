<?php

namespace ContainerZ42hTeB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZeVTUWWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zeVTUWW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zeVTUWW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carTypeRepository' => ['privates', 'App\\Repository\\CarTypeRepository', 'getCarTypeRepositoryService', true],
        ], [
            'carTypeRepository' => 'App\\Repository\\CarTypeRepository',
        ]);
    }
}

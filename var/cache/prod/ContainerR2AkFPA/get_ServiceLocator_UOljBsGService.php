<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UOljBsGService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.UOljBsG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UOljBsG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.UOljBsG.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.UOljBsG": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'carRepository' => 'App\\Repository\\CarRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}

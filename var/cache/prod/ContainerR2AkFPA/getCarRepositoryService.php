<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CarRepository' shared autowired service.
     *
     * @return \App\Repository\CarRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CarRepository'] = new \App\Repository\CarRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}

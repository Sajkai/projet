<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CarFormType' shared autowired service.
     *
     * @return \App\Form\CarFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CarFormType'] = new \App\Form\CarFormType();
    }
}

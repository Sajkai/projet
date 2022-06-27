<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Data_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(($container->privates['liip_imagine.binary.mime_type_guesser'] ?? $container->load('getLiipImagine_Binary_MimeTypeGuesserService')), \Symfony\Component\Mime\MimeTypes::getDefault(), ($container->privates['liip_imagine.filter.configuration'] ?? $container->load('getLiipImagine_Filter_ConfigurationService')), 'default', NULL);

        $instance->addLoader('default', ($container->services['liip_imagine.binary.loader.default'] ?? $container->load('getLiipImagine_Binary_Loader_DefaultService')));

        return $instance;
    }
}

<?php

namespace ContainerZ42hTeB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_InterlaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/InterlaceFilterLoader.php';

        return $container->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }
}

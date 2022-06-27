<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Binary_Loader_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = \Symfony\Component\Mime\MimeTypes::getDefault();

        return $container->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($a, $a, new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator([0 => (\dirname(__DIR__, 4).'/public/')], false));
    }
}

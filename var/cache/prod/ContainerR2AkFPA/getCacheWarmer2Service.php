<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmer2Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'Vich\UploaderBundle\Metadata\CacheWarmer' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\CacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] = new \Vich\UploaderBundle\Metadata\CacheWarmer(($container->targetDir.''.'/vich_uploader'), ($container->privates['vich_uploader.metadata_reader'] ?? $container->load('getVichUploader_MetadataReaderService')));
    }
}

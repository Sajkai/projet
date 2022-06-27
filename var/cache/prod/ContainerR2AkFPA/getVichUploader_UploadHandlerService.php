<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_UploadHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['vich_uploader.storage.file_system'] ?? $container->load('getVichUploader_Storage_FileSystemService'));

        return $container->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($container->privates['vich_uploader.property_mapping_factory'] ?? $container->load('getVichUploader_PropertyMappingFactoryService')), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}

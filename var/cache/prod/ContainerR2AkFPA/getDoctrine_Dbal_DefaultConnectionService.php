<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'vich_uploader.listener.clean.type_image' => ['privates', 'vich_uploader.listener.clean.type_image', 'getVichUploader_Listener_Clean_TypeImageService', true],
            'vich_uploader.listener.clean.vehicule_image' => ['privates', 'vich_uploader.listener.clean.vehicule_image', 'getVichUploader_Listener_Clean_VehiculeImageService', true],
            'vich_uploader.listener.inject.type_image' => ['privates', 'vich_uploader.listener.inject.type_image', 'getVichUploader_Listener_Inject_TypeImageService', true],
            'vich_uploader.listener.remove.type_image' => ['privates', 'vich_uploader.listener.remove.type_image', 'getVichUploader_Listener_Remove_TypeImageService', true],
            'vich_uploader.listener.remove.vehicule_image' => ['privates', 'vich_uploader.listener.remove.vehicule_image', 'getVichUploader_Listener_Remove_VehiculeImageService', true],
            'vich_uploader.listener.upload.type_image' => ['privates', 'vich_uploader.listener.upload.type_image', 'getVichUploader_Listener_Upload_TypeImageService', true],
            'vich_uploader.listener.upload.vehicule_image' => ['privates', 'vich_uploader.listener.upload.vehicule_image', 'getVichUploader_Listener_Upload_VehiculeImageService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'vich_uploader.listener.clean.type_image' => '?',
            'vich_uploader.listener.clean.vehicule_image' => '?',
            'vich_uploader.listener.inject.type_image' => '?',
            'vich_uploader.listener.remove.type_image' => '?',
            'vich_uploader.listener.remove.vehicule_image' => '?',
            'vich_uploader.listener.upload.type_image' => '?',
            'vich_uploader.listener.upload.vehicule_image' => '?',
        ]), [0 => 'vich_uploader.listener.clean.vehicule_image', 1 => 'vich_uploader.listener.clean.type_image', 2 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 3 => 'vich_uploader.listener.remove.vehicule_image', 4 => 'vich_uploader.listener.upload.vehicule_image', 5 => 'vich_uploader.listener.inject.type_image', 6 => 'vich_uploader.listener.remove.type_image', 7 => 'vich_uploader.listener.upload.type_image']);
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['connection_override_options' => [], 'url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }
}

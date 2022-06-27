<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($container->privates['liip_imagine.filter.configuration'] ?? $container->load('getLiipImagine_Filter_ConfigurationService')), ($container->services['router'] ?? $container->getRouterService()), ($container->services['liip_imagine.cache.signer'] ?? ($container->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($container->getEnv('APP_SECRET')))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'default', false);

        $instance->addResolver('default', ($container->services['liip_imagine.cache.resolver.default'] ?? $container->load('getLiipImagine_Cache_Resolver_DefaultService')));
        $instance->addResolver('no_cache', ($container->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $container->load('getLiipImagine_Cache_Resolver_NoCacheWebPathService')));

        return $instance;
    }
}

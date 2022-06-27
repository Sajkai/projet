<?php

namespace ContainerGqZTGxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_Resolver_NoCacheWebPathService extends App_KernelDeDebugContainer
{
    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/ResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Cache/Resolver/NoCacheWebPathResolver.php';

        return $container->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()));
    }
}

<?php

namespace ContainerZ42hTeB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserInterface4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.a_ZoksN.Symfony\Component\Security\Core\User\UserInterface' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.a_ZoksN": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?');
    }
}

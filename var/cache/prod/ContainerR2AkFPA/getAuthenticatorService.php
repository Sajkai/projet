<?php

namespace ContainerR2AkFPA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Authenticator' shared autowired service.
     *
     * @return \App\Security\Authenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\Authenticator'] = new \App\Security\Authenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['router'] ?? $container->getRouterService()), ($container->services['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}

<?php

namespace ContainerZ42hTeB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7C2bflBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7C2bflB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7C2bflB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\AdminController::panel' => ['privates', '.service_locator.z4aLW7N', 'get_ServiceLocator_Z4aLW7NService', true],
            'App\\Controller\\AdminController::setUserLoueur' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\AdminController::setUserUtilisateur' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\IndexController::home_redirect' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\IndexController::index' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\IndexController::showCarsOfType' => ['privates', '.service_locator.BjdZWkH', 'get_ServiceLocator_BjdZWkHService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.JvKr5ux', 'get_ServiceLocator_JvKr5uxService', true],
            'App\\Controller\\RentController::rent' => ['privates', '.service_locator.JVStqZH', 'get_ServiceLocator_JVStqZHService', true],
            'App\\Controller\\RenterController::addCar' => ['privates', '.service_locator.JVStqZH', 'get_ServiceLocator_JVStqZHService', true],
            'App\\Controller\\RenterController::billing' => ['privates', '.service_locator.jEqkjsq', 'get_ServiceLocator_JEqkjsqService', true],
            'App\\Controller\\RenterController::cars' => ['privates', '.service_locator.UOljBsG', 'get_ServiceLocator_UOljBsGService', true],
            'App\\Controller\\RenterController::customers' => ['privates', '.service_locator.a_ZoksN', 'get_ServiceLocator_AZoksNService', true],
            'App\\Controller\\RenterController::dashboard' => ['privates', '.service_locator.jEqkjsq', 'get_ServiceLocator_JEqkjsqService', true],
            'App\\Controller\\RenterController::deleteCar' => ['privates', '.service_locator.UOljBsG', 'get_ServiceLocator_UOljBsGService', true],
            'App\\Controller\\RenterController::editCar' => ['privates', '.service_locator..lRcAHS', 'get_ServiceLocator__LRcAHSService', true],
            'App\\Controller\\RenterController::editType' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\RenterController::rentDetail' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\RenterController::renterRents' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.Tvd7vqW', 'get_ServiceLocator_Tvd7vqWService', true],
            'App\\Controller\\UserController::cancel' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController::facturation' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController::facturationMois' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.0hiJele', 'get_ServiceLocator_0hiJeleService', true],
            'App\\Controller\\UserController::locations' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController::recapLocation' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController::stop' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.Bv1nHN9', 'get_ServiceLocator_Bv1nHN9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'kernel::terminate' => ['privates', '.service_locator.Bv1nHN9', 'get_ServiceLocator_Bv1nHN9Service', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\AdminController:panel' => ['privates', '.service_locator.z4aLW7N', 'get_ServiceLocator_Z4aLW7NService', true],
            'App\\Controller\\AdminController:setUserLoueur' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\AdminController:setUserUtilisateur' => ['privates', '.service_locator.tOGcR5F', 'get_ServiceLocator_TOGcR5FService', true],
            'App\\Controller\\IndexController:home_redirect' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\IndexController:index' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\IndexController:showCarsOfType' => ['privates', '.service_locator.BjdZWkH', 'get_ServiceLocator_BjdZWkHService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.JvKr5ux', 'get_ServiceLocator_JvKr5uxService', true],
            'App\\Controller\\RentController:rent' => ['privates', '.service_locator.JVStqZH', 'get_ServiceLocator_JVStqZHService', true],
            'App\\Controller\\RenterController:addCar' => ['privates', '.service_locator.JVStqZH', 'get_ServiceLocator_JVStqZHService', true],
            'App\\Controller\\RenterController:billing' => ['privates', '.service_locator.jEqkjsq', 'get_ServiceLocator_JEqkjsqService', true],
            'App\\Controller\\RenterController:cars' => ['privates', '.service_locator.UOljBsG', 'get_ServiceLocator_UOljBsGService', true],
            'App\\Controller\\RenterController:customers' => ['privates', '.service_locator.a_ZoksN', 'get_ServiceLocator_AZoksNService', true],
            'App\\Controller\\RenterController:dashboard' => ['privates', '.service_locator.jEqkjsq', 'get_ServiceLocator_JEqkjsqService', true],
            'App\\Controller\\RenterController:deleteCar' => ['privates', '.service_locator.UOljBsG', 'get_ServiceLocator_UOljBsGService', true],
            'App\\Controller\\RenterController:editCar' => ['privates', '.service_locator..lRcAHS', 'get_ServiceLocator__LRcAHSService', true],
            'App\\Controller\\RenterController:editType' => ['privates', '.service_locator.zeVTUWW', 'get_ServiceLocator_ZeVTUWWService', true],
            'App\\Controller\\RenterController:rentDetail' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\RenterController:renterRents' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.Tvd7vqW', 'get_ServiceLocator_Tvd7vqWService', true],
            'App\\Controller\\UserController:cancel' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController:facturation' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController:facturationMois' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.0hiJele', 'get_ServiceLocator_0hiJeleService', true],
            'App\\Controller\\UserController:locations' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController:recapLocation' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'App\\Controller\\UserController:stop' => ['privates', '.service_locator.ZrqmD3A', 'get_ServiceLocator_ZrqmD3AService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.7F3oxVY', 'get_ServiceLocator_7F3oxVYService', true],
            'kernel:terminate' => ['privates', '.service_locator.Bv1nHN9', 'get_ServiceLocator_Bv1nHN9Service', true],
        ], [
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::panel' => '?',
            'App\\Controller\\AdminController::setUserLoueur' => '?',
            'App\\Controller\\AdminController::setUserUtilisateur' => '?',
            'App\\Controller\\IndexController::home_redirect' => '?',
            'App\\Controller\\IndexController::index' => '?',
            'App\\Controller\\IndexController::showCarsOfType' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RentController::rent' => '?',
            'App\\Controller\\RenterController::addCar' => '?',
            'App\\Controller\\RenterController::billing' => '?',
            'App\\Controller\\RenterController::cars' => '?',
            'App\\Controller\\RenterController::customers' => '?',
            'App\\Controller\\RenterController::dashboard' => '?',
            'App\\Controller\\RenterController::deleteCar' => '?',
            'App\\Controller\\RenterController::editCar' => '?',
            'App\\Controller\\RenterController::editType' => '?',
            'App\\Controller\\RenterController::rentDetail' => '?',
            'App\\Controller\\RenterController::renterRents' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::cancel' => '?',
            'App\\Controller\\UserController::facturation' => '?',
            'App\\Controller\\UserController::facturationMois' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::locations' => '?',
            'App\\Controller\\UserController::recapLocation' => '?',
            'App\\Controller\\UserController::stop' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:panel' => '?',
            'App\\Controller\\AdminController:setUserLoueur' => '?',
            'App\\Controller\\AdminController:setUserUtilisateur' => '?',
            'App\\Controller\\IndexController:home_redirect' => '?',
            'App\\Controller\\IndexController:index' => '?',
            'App\\Controller\\IndexController:showCarsOfType' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RentController:rent' => '?',
            'App\\Controller\\RenterController:addCar' => '?',
            'App\\Controller\\RenterController:billing' => '?',
            'App\\Controller\\RenterController:cars' => '?',
            'App\\Controller\\RenterController:customers' => '?',
            'App\\Controller\\RenterController:dashboard' => '?',
            'App\\Controller\\RenterController:deleteCar' => '?',
            'App\\Controller\\RenterController:editCar' => '?',
            'App\\Controller\\RenterController:editType' => '?',
            'App\\Controller\\RenterController:rentDetail' => '?',
            'App\\Controller\\RenterController:renterRents' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:cancel' => '?',
            'App\\Controller\\UserController:facturation' => '?',
            'App\\Controller\\UserController:facturationMois' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:locations' => '?',
            'App\\Controller\\UserController:recapLocation' => '?',
            'App\\Controller\\UserController:stop' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}

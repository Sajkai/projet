<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_panel', '_controller' => 'App\\Controller\\AdminController::panel'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'index_home_redirect', '_controller' => 'App\\Controller\\IndexController::home_redirect'], null, null, null, false, false, null]],
        '/date_r' => [[['_route' => 'index_date_reset', '_controller' => 'App\\Controller\\IndexController::reinit_dates'], null, null, null, false, false, null]],
        '/date_i' => [[['_route' => 'index_date_init', '_controller' => 'App\\Controller\\IndexController::init_dates'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/gestion' => [[['_route' => 'renter_panel', '_controller' => 'App\\Controller\\RenterController::dashboard'], null, null, null, true, false, null]],
        '/gestion/vehicule' => [[['_route' => 'renter_cars', '_controller' => 'App\\Controller\\RenterController::cars'], null, null, null, false, false, null]],
        '/gestion/modele/ajouter' => [[['_route' => 'renter_addType', '_controller' => 'App\\Controller\\RenterController::addType'], null, null, null, false, false, null]],
        '/gestion/vehicule/ajouter' => [[['_route' => 'renter_addCar', '_controller' => 'App\\Controller\\RenterController::addCar'], null, null, null, false, false, null]],
        '/gestion/clients' => [[['_route' => 'renter_customers', '_controller' => 'App\\Controller\\RenterController::customers'], null, null, null, false, false, null]],
        '/gestion/locations' => [[['_route' => 'renter_rents', '_controller' => 'App\\Controller\\RenterController::renterRents'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'user_panel', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
        '/compte/locations' => [[['_route' => 'user_rents', '_controller' => 'App\\Controller\\UserController::locations'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/utilisateurs/(?'
                    .'|supprimer/(\\d+)(*:45)'
                    .'|renter/(\\d+)(*:64)'
                    .'|utilisateur/(\\d+)(*:88)'
                .')'
                .'|/page(?:/([^/]++))?(*:115)'
                .'|/type/([^/]++)(*:137)'
                .'|/location/vehicule/([^/]++)(*:172)'
                .'|/gestion/(?'
                    .'|modele/modifier/([^/]++)(*:216)'
                    .'|vehicule/(?'
                        .'|modifier/([^/]++)(*:253)'
                        .'|archiver/([^/]++)(*:278)'
                    .')'
                    .'|facturation/([^/]++)(*:307)'
                    .'|details/([^/]++)(*:331)'
                .')'
                .'|/compte/(?'
                    .'|stop/([^/]++)(*:364)'
                    .'|facturation(?'
                        .'|/([^/]++)(*:395)'
                        .'|_mois/([^/]++)(*:417)'
                    .')'
                    .'|details/([^/]++)(*:442)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:505)'
                    .'|([A-z0-9_-]*)/(.+)(*:531)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'admin_panel_utilisateur_supprimer', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        64 => [[['_route' => 'admin_panel_utilisateur_loueur', '_controller' => 'App\\Controller\\AdminController::setUserLoueur'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'admin_panel_utilisateur_utilisateur', '_controller' => 'App\\Controller\\AdminController::setUserUtilisateur'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'index_home', 'page' => 1, '_controller' => 'App\\Controller\\IndexController::index'], ['page'], null, null, false, true, null]],
        137 => [[['_route' => 'index_type', '_controller' => 'App\\Controller\\IndexController::showCarsOfType'], ['id'], null, null, false, true, null]],
        172 => [[['_route' => 'location_louer', '_controller' => 'App\\Controller\\RentController::rent'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => 'renter_editType', '_controller' => 'App\\Controller\\RenterController::editType'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'renter_editCar', '_controller' => 'App\\Controller\\RenterController::editCar'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'renter_deleteCar', '_controller' => 'App\\Controller\\RenterController::deleteCar'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'renter_billing', '_controller' => 'App\\Controller\\RenterController::billing'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'renter_rent_details', '_controller' => 'App\\Controller\\RenterController::rentDetail'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'user_stopMonthlyRent', '_controller' => 'App\\Controller\\UserController::stop'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'user_billing', '_controller' => 'App\\Controller\\UserController::facturation'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'user_RecurringBilling', '_controller' => 'App\\Controller\\UserController::cancel'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'user_rent_detail', '_controller' => 'App\\Controller\\UserController::recapLocation'], ['id'], null, null, false, true, null]],
        505 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        531 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

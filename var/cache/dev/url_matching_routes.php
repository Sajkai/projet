<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/utilisateurs/(?'
                    .'|supprimer/(\\d+)(*:207)'
                    .'|renter/(\\d+)(*:227)'
                    .'|utilisateur/(\\d+)(*:252)'
                .')'
                .'|/page(?:/([^/]++))?(*:280)'
                .'|/type/([^/]++)(*:302)'
                .'|/location/vehicule/([^/]++)(*:337)'
                .'|/gestion/(?'
                    .'|modele/modifier/([^/]++)(*:381)'
                    .'|vehicule/(?'
                        .'|modifier/([^/]++)(*:418)'
                        .'|archiver/([^/]++)(*:443)'
                    .')'
                    .'|facturation/([^/]++)(*:472)'
                    .'|details/([^/]++)(*:496)'
                .')'
                .'|/compte/(?'
                    .'|stop/([^/]++)(*:529)'
                    .'|facturation(?'
                        .'|/([^/]++)(*:560)'
                        .'|_mois/([^/]++)(*:582)'
                    .')'
                    .'|details/([^/]++)(*:607)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:670)'
                    .'|([A-z0-9_-]*)/(.+)(*:696)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'admin_panel_utilisateur_supprimer', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'admin_panel_utilisateur_loueur', '_controller' => 'App\\Controller\\AdminController::setUserLoueur'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'admin_panel_utilisateur_utilisateur', '_controller' => 'App\\Controller\\AdminController::setUserUtilisateur'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'index_home', 'page' => 1, '_controller' => 'App\\Controller\\IndexController::index'], ['page'], null, null, false, true, null]],
        302 => [[['_route' => 'index_type', '_controller' => 'App\\Controller\\IndexController::showCarsOfType'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'location_louer', '_controller' => 'App\\Controller\\RentController::rent'], ['id'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'renter_editType', '_controller' => 'App\\Controller\\RenterController::editType'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'renter_editCar', '_controller' => 'App\\Controller\\RenterController::editCar'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'renter_deleteCar', '_controller' => 'App\\Controller\\RenterController::deleteCar'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => 'renter_billing', '_controller' => 'App\\Controller\\RenterController::billing'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'renter_rent_details', '_controller' => 'App\\Controller\\RenterController::rentDetail'], ['id'], null, null, false, true, null]],
        529 => [[['_route' => 'user_stopMonthlyRent', '_controller' => 'App\\Controller\\UserController::stop'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'user_billing', '_controller' => 'App\\Controller\\UserController::facturation'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'user_RecurringBilling', '_controller' => 'App\\Controller\\UserController::cancel'], ['id'], null, null, false, true, null]],
        607 => [[['_route' => 'user_rent_detail', '_controller' => 'App\\Controller\\UserController::recapLocation'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        696 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

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
        '/list' => [[['_route' => 'list_create', '_controller' => 'App\\Controller\\DessertListUserController::create'], null, ['POST' => 0], null, false, false, null]],
        '/lists' => [[['_route' => 'list_get', '_controller' => 'App\\Controller\\DessertListUserController::getDessertList'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\UsersController::registration'], null, null, null, false, false, null]],
        '/information' => [[['_route' => 'information', '_controller' => 'App\\Controller\\UsersController::information'], null, ['GET' => 0], null, false, false, null]],
        '/api/desserts' => [[['_route' => 'desserts_get', '_controller' => 'App\\Controller\\LibraryController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/dessert' => [[['_route' => 'create_dessert', '_controller' => 'App\\Controller\\LibraryController::create'], null, ['POST' => 0], null, false, false, null]],
        '/list/dessertsUser' => [[['_route' => 'dessertUser_create', '_controller' => 'App\\Controller\\DessertsUserController::create'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/list(?'
                    .'|s/([^/]++)(*:187)'
                    .'|/(?'
                        .'|remove/([^/]++)(*:214)'
                        .'|dessertsUser/([^/]++)(*:243)'
                    .')'
                .')'
                .'|/api/desserts/([^/]++)(*:275)'
                .'|/js/routing(?:\\.(js|json))?(*:310)'
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
        187 => [[['_route' => 'list_delete', '_controller' => 'App\\Controller\\DessertListUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        214 => [[['_route' => 'dessertUser_delete', '_controller' => 'App\\Controller\\DessertsUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        243 => [[['_route' => 'dessertsUser_get', '_controller' => 'App\\Controller\\DessertsUserController::list'], ['idList'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'dessert_delete', '_controller' => 'App\\Controller\\LibraryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        310 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

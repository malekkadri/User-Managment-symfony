<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController1::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController1::verifyUserEmail'], null, null, null, false, false, null]],
        '/mot-de-passe' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/mot-de-passe/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController1::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController1::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/utilisateur(?'
                    .'|/([^/]++)(?'
                        .'|(*:40)'
                        .'|/edit(*:52)'
                    .')'
                    .'|([^/]++)/suppression(*:80)'
                .')'
                .'|/mot\\-de\\-passe/nouveau\\-mot\\-de\\-passe(?:/([^/]++))?(*:141)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:177)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:216)'
                    .'|wdt/([^/]++)(*:236)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:282)'
                            .'|router(*:296)'
                            .'|exception(?'
                                .'|(*:316)'
                                .'|\\.css(*:329)'
                            .')'
                        .')'
                        .'|(*:339)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        52 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        141 => [[['_route' => 'reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        177 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        216 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        236 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        282 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        296 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        316 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        329 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        339 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

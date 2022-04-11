<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fiche/frais/new' => [[['_route' => 'app_fiche_frais_new', '_controller' => 'App\\Controller\\FicheFraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/frais/forfait' => [[['_route' => 'app_frais_forfait_index', '_controller' => 'App\\Controller\\FraisForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/frais/forfait/new' => [[['_route' => 'app_frais_forfait_new', '_controller' => 'App\\Controller\\FraisForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/frais/forfait' => [[['_route' => 'app_ligne_frais_forfait_index', '_controller' => 'App\\Controller\\LigneFraisForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/frais/forfait/new' => [[['_route' => 'app_ligne_frais_forfait_new', '_controller' => 'App\\Controller\\LigneFraisForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/frais/hors/forfait' => [[['_route' => 'app_ligne_frais_hors_forfait_index', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/frais/hors/forfait/new' => [[['_route' => 'app_ligne_frais_hors_forfait_new', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegistrationController:register'], null, null, null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/visiteur/consulter' => [[['_route' => 'consulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
        '/visiteur/renseigner' => [[['_route' => 'renseigner', '_controller' => 'App\\Controller\\VisiteurController::renseigner'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/f(?'
                    .'|iche/frais/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|rais/forfait/([^/]++)(?'
                        .'|(*:85)'
                        .'|/edit(*:97)'
                        .'|(*:104)'
                    .')'
                .')'
                .'|/ligne/frais/(?'
                    .'|forfait/([^/]++)(?'
                        .'|(*:149)'
                        .'|/edit(*:162)'
                        .'|(*:170)'
                    .')'
                    .'|hors/forfait/([^/]++)(?'
                        .'|(*:203)'
                        .'|/edit(*:216)'
                        .'|(*:224)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:265)'
                    .'|wdt/([^/]++)(*:285)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:331)'
                            .'|router(*:345)'
                            .'|exception(?'
                                .'|(*:365)'
                                .'|\\.css(*:378)'
                            .')'
                        .')'
                        .'|(*:388)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_fiche_frais_show', '_controller' => 'App\\Controller\\FicheFraisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_fiche_frais_edit', '_controller' => 'App\\Controller\\FicheFraisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_fiche_frais_delete', '_controller' => 'App\\Controller\\FicheFraisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        85 => [[['_route' => 'app_frais_forfait_show', '_controller' => 'App\\Controller\\FraisForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_frais_forfait_edit', '_controller' => 'App\\Controller\\FraisForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        104 => [[['_route' => 'app_frais_forfait_delete', '_controller' => 'App\\Controller\\FraisForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        149 => [[['_route' => 'app_ligne_frais_forfait_show', '_controller' => 'App\\Controller\\LigneFraisForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        162 => [[['_route' => 'app_ligne_frais_forfait_edit', '_controller' => 'App\\Controller\\LigneFraisForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        170 => [[['_route' => 'app_ligne_frais_forfait_delete', '_controller' => 'App\\Controller\\LigneFraisForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_ligne_frais_hors_forfait_show', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_ligne_frais_hors_forfait_edit', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'app_ligne_frais_hors_forfait_delete', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        285 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        331 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        345 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        365 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        378 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        388 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'app_comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'app_etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat/new' => [[['_route' => 'app_etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/frais' => [[['_route' => 'app_fiche_frais_index', '_controller' => 'App\\Controller\\FicheFraisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fiche/frais/new' => [[['_route' => 'app_fiche_frais_new', '_controller' => 'App\\Controller\\FicheFraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/frais/hors/forfait' => [[['_route' => 'app_ligne_frais_hors_forfait_index', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/frais/hors/forfait/new' => [[['_route' => 'app_ligne_frais_hors_forfait_new', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/visiteur' => [[['_route' => 'app_visiteur_index', '_controller' => 'App\\Controller\\VisiteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/visiteur/new' => [[['_route' => 'app_visiteur_new', '_controller' => 'App\\Controller\\VisiteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/etat/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/fiche/frais/([^/]++)(?'
                    .'|(*:75)'
                    .'|/edit(*:87)'
                    .'|(*:94)'
                .')'
                .'|/ligne/frais/hors/forfait/([^/]++)(?'
                    .'|(*:139)'
                    .'|/edit(*:152)'
                    .'|(*:160)'
                .')'
                .'|/visiteur/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:251)'
                    .'|wdt/([^/]++)(*:271)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:317)'
                            .'|router(*:331)'
                            .'|exception(?'
                                .'|(*:351)'
                                .'|\\.css(*:364)'
                            .')'
                        .')'
                        .'|(*:374)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'app_etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_fiche_frais_show', '_controller' => 'App\\Controller\\FicheFraisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_fiche_frais_edit', '_controller' => 'App\\Controller\\FicheFraisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_fiche_frais_delete', '_controller' => 'App\\Controller\\FicheFraisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_ligne_frais_hors_forfait_show', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_ligne_frais_hors_forfait_edit', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [[['_route' => 'app_ligne_frais_hors_forfait_delete', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        190 => [[['_route' => 'app_visiteur_show', '_controller' => 'App\\Controller\\VisiteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_visiteur_edit', '_controller' => 'App\\Controller\\VisiteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_visiteur_delete', '_controller' => 'App\\Controller\\VisiteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        271 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        317 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        351 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        364 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        374 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

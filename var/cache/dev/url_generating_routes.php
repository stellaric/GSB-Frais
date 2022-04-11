<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_fiche_frais_new' => [[], ['_controller' => 'App\\Controller\\FicheFraisController::new'], [], [['text', '/fiche/frais/new']], [], [], []],
    'app_fiche_frais_show' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fiche/frais']], [], [], []],
    'app_fiche_frais_edit' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/fiche/frais']], [], [], []],
    'app_fiche_frais_delete' => [['id'], ['_controller' => 'App\\Controller\\FicheFraisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fiche/frais']], [], [], []],
    'app_frais_forfait_index' => [[], ['_controller' => 'App\\Controller\\FraisForfaitController::index'], [], [['text', '/frais/forfait/']], [], [], []],
    'app_frais_forfait_new' => [[], ['_controller' => 'App\\Controller\\FraisForfaitController::new'], [], [['text', '/frais/forfait/new']], [], [], []],
    'app_frais_forfait_show' => [['id'], ['_controller' => 'App\\Controller\\FraisForfaitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/frais/forfait']], [], [], []],
    'app_frais_forfait_edit' => [['id'], ['_controller' => 'App\\Controller\\FraisForfaitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/frais/forfait']], [], [], []],
    'app_frais_forfait_delete' => [['id'], ['_controller' => 'App\\Controller\\FraisForfaitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/frais/forfait']], [], [], []],
    'app_ligne_frais_forfait_index' => [[], ['_controller' => 'App\\Controller\\LigneFraisForfaitController::index'], [], [['text', '/ligne/frais/forfait/']], [], [], []],
    'app_ligne_frais_forfait_new' => [[], ['_controller' => 'App\\Controller\\LigneFraisForfaitController::new'], [], [['text', '/ligne/frais/forfait/new']], [], [], []],
    'app_ligne_frais_forfait_show' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisForfaitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/forfait']], [], [], []],
    'app_ligne_frais_forfait_edit' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisForfaitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/forfait']], [], [], []],
    'app_ligne_frais_forfait_delete' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisForfaitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/forfait']], [], [], []],
    'app_ligne_frais_hors_forfait_index' => [[], ['_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::index'], [], [['text', '/ligne/frais/hors/forfait/']], [], [], []],
    'app_ligne_frais_hors_forfait_new' => [[], ['_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::new'], [], [['text', '/ligne/frais/hors/forfait/new']], [], [], []],
    'app_ligne_frais_hors_forfait_show' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/hors/forfait']], [], [], []],
    'app_ligne_frais_hors_forfait_edit' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/hors/forfait']], [], [], []],
    'app_ligne_frais_hors_forfait_delete' => [['id'], ['_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ligne/frais/hors/forfait']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'deconnexion' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\RegistrationController:register'], [], [['text', '/inscription']], [], [], []],
    'visiteur' => [[], ['_controller' => 'App\\Controller\\VisiteurController::index'], [], [['text', '/visiteur']], [], [], []],
    'consulter' => [[], ['_controller' => 'App\\Controller\\VisiteurController::consulter'], [], [['text', '/visiteur/consulter']], [], [], []],
    'renseigner' => [[], ['_controller' => 'App\\Controller\\VisiteurController::renseigner'], [], [['text', '/visiteur/renseigner']], [], [], []],
];

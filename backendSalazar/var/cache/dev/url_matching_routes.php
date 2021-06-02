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
        '/citas' => [
            [['_route' => 'crear_cita', '_controller' => 'App\\Controller\\CitaController::crearCita'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'get_citas', '_controller' => 'App\\Controller\\CitaController::getCitas'], null, ['GET' => 0], null, false, false, null],
        ],
        '/especialidades' => [
            [['_route' => 'get_especialidades', '_controller' => 'App\\Controller\\EspecialidadController::getEspecialidades'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_especialidad', '_controller' => 'App\\Controller\\EspecialidadController::addEspecialidad'], null, ['POST' => 0], null, false, false, null],
        ],
        '/medicos' => [[['_route' => 'get_medicos', '_controller' => 'App\\Controller\\MedicoController::getMedicos'], null, ['GET' => 0], null, false, false, null]],
        '/otros' => [[['_route' => 'get_otros', '_controller' => 'App\\Controller\\OtroController::getOtros'], null, ['GET' => 0], null, false, false, null]],
        '/salas' => [[['_route' => 'get_salas', '_controller' => 'App\\Controller\\SalaController::getSalas'], null, ['GET' => 0], null, false, false, null]],
        '/usuarios/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UsuarioController::login'], null, ['POST' => 0], null, false, false, null]],
        '/usuarios/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\UsuarioController::registrar'], null, ['POST' => 0], null, false, false, null]],
        '/usuarios' => [
            [['_route' => 'get_usuario', '_controller' => 'App\\Controller\\UsuarioController::getUsuario'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'actualizar_usuario', '_controller' => 'App\\Controller\\UsuarioController::actualizarUsuario'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'eliminar_usuario', '_controller' => 'App\\Controller\\UsuarioController::borrarUsuario'], null, ['DELETE' => 0], null, false, false, null],
        ],
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
                .'|/citas/([^/]++)(?'
                    .'|(*:187)'
                .')'
                .'|/especialidades/([^/]++)(?'
                    .'|(*:223)'
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
        187 => [
            [['_route' => 'borrar_cita', '_controller' => 'App\\Controller\\CitaController::borrarCita'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'actualizar_cita', '_controller' => 'App\\Controller\\CitaController::actualizarCita'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        223 => [
            [['_route' => 'get_especialidad', '_controller' => 'App\\Controller\\EspecialidadController::getEspecialidad'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'borrar_especialidad', '_controller' => 'App\\Controller\\EspecialidadController::borrarEspecialidad'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

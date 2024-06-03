<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/buscador' => [[['_route' => 'app_buscador', '_controller' => 'App\\Controller\\BuscadorController::index'], null, null, null, false, false, null]],
        '/buscador_clase' => [[['_route' => 'app_buscador_clase', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Clases'], null, null, null, false, false, null]],
        '/resultados_clase' => [[['_route' => 'app_resultados_clases', '_controller' => 'App\\Controller\\BuscadorController::gestioneditarok'], null, null, null, false, false, null]],
        '/buscador_subclase' => [[['_route' => 'app_buscador_subclase', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Subclases'], null, null, null, false, false, null]],
        '/resultados_subclases' => [[['_route' => 'app_resultados_subclases', '_controller' => 'App\\Controller\\BuscadorController::SubclasesOk'], null, null, null, false, false, null]],
        '/buscador_razas' => [[['_route' => 'app_buscador_razas', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Razas'], null, null, null, false, false, null]],
        '/resultados_razas' => [[['_route' => 'app_resultados_razas', '_controller' => 'App\\Controller\\BuscadorController::Razas_Ok'], null, null, null, false, false, null]],
        '/buscador_subraza' => [[['_route' => 'app_buscador_subraza', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Subrazas'], null, null, null, false, false, null]],
        '/resultados_subrazas' => [[['_route' => 'app_resultados_subrazas', '_controller' => 'App\\Controller\\BuscadorController::SubrazasOK'], null, null, null, false, false, null]],
        '/buscador_trasfondo' => [[['_route' => 'app_buscador_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Trasfondos'], null, null, null, false, false, null]],
        '/resultados_trasfondos' => [[['_route' => 'app_resultados_trasfondos', '_controller' => 'App\\Controller\\BuscadorController::Trasfondos_Ok'], null, null, null, false, false, null]],
        '/buscador_dotes' => [[['_route' => 'app_buscador_dotes', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Dotes'], null, null, null, false, false, null]],
        '/resultados_dotes' => [[['_route' => 'app_resultados_dotes', '_controller' => 'App\\Controller\\BuscadorController::Dotes_Ok'], null, null, null, false, false, null]],
        '/buscador_hechizos' => [[['_route' => 'app_buscador_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Hechizos'], null, null, null, false, false, null]],
        '/resultados_hechizos' => [[['_route' => 'app_resultados_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Hechizos_Ok'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/clases' => [[['_route' => 'app_ok', '_controller' => 'App\\Controller\\IndexController::clases'], null, null, null, false, false, null]],
        '/subclases' => [[['_route' => 'app_ok_subclases', '_controller' => 'App\\Controller\\IndexController::subclases'], null, null, null, false, false, null]],
        '/razas' => [[['_route' => 'app_ok_razas', '_controller' => 'App\\Controller\\IndexController::razas'], null, null, null, false, false, null]],
        '/subrazas' => [[['_route' => 'app_ok_subrazas', '_controller' => 'App\\Controller\\IndexController::subrazas'], null, null, null, false, false, null]],
        '/dotes' => [[['_route' => 'app_ok_dotes', '_controller' => 'App\\Controller\\IndexController::dotes'], null, null, null, false, false, null]],
        '/trasfondos' => [[['_route' => 'app_ok_trasfondos', '_controller' => 'App\\Controller\\IndexController::trasfondos'], null, null, null, false, false, null]],
        '/hechizos' => [[['_route' => 'app_ok_hechizos', '_controller' => 'App\\Controller\\IndexController::hechizos'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/personaje' => [[['_route' => 'app_personaje', '_controller' => 'App\\Controller\\PersonajeController::index'], null, null, null, false, false, null]],
        '/personaje2' => [[['_route' => 'app_personaje_paso2', '_controller' => 'App\\Controller\\PersonajeController::paso2'], null, null, null, false, false, null]],
        '/ficha_de_personaje' => [[['_route' => 'app_personaje_paso3', '_controller' => 'App\\Controller\\PersonajeController::paso3'], null, null, null, false, false, null]],
        '/public/test_public' => [[['_route' => 'test_public', '_controller' => 'App\\Controller\\SeguridadController::test_public'], null, null, null, false, false, null]],
        '/private/test_private' => [[['_route' => 'test_private', '_controller' => 'App\\Controller\\SeguridadController::test_private'], null, null, null, false, false, null]],
        '/solicitudes' => [[['_route' => 'app_solicitudes', '_controller' => 'App\\Controller\\SolicitudesController::index'], null, null, null, false, false, null]],
        '/revisiones' => [[['_route' => 'app_revisiones', '_controller' => 'App\\Controller\\SolicitudesController::revisiones'], null, null, null, false, false, null]],
        '/revisiones_clase' => [[['_route' => 'app_revisiones_clase', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_clase'], null, null, null, false, false, null]],
        '/solicitud_clase' => [[['_route' => 'app_solicitud_clase', '_controller' => 'App\\Controller\\SolicitudesController::Buscador_Clases'], null, null, null, false, false, null]],
        '/solicitud_clase_habilidades' => [[['_route' => 'app_solicitud_clase_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_clase'], null, null, null, false, false, null]],
        '/solicitud_ok' => [[['_route' => 'app_solicitud_ok', '_controller' => 'App\\Controller\\SolicitudesController::gestioneditarok'], null, null, null, false, false, null]],
        '/revisiones_subclase' => [[['_route' => 'app_revisiones_subclase', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_subclase'], null, null, null, false, false, null]],
        '/solicitudes_subclase' => [[['_route' => 'app_solicitudes_subclase', '_controller' => 'App\\Controller\\SolicitudesController::Buscador_Subclases'], null, null, null, false, false, null]],
        '/solicitud_subclase_habilidades' => [[['_route' => 'app_solicitud_subclase_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_subclase'], null, null, null, false, false, null]],
        '/solicitud_raza' => [[['_route' => 'app_solicitud_raza', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Razas'], null, null, null, false, false, null]],
        '/solicitud_raza_habilidades' => [[['_route' => 'app_solicitud_raza_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_raza'], null, null, null, false, false, null]],
        '/revisiones_razas' => [[['_route' => 'app_revisiones_raza', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_razas'], null, null, null, false, false, null]],
        '/solicitud_subraza' => [[['_route' => 'app_solicitud_subraza', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Subrazas'], null, null, null, false, false, null]],
        '/revisiones_subrazas' => [[['_route' => 'app_revisiones_subraza', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_subrazas'], null, null, null, false, false, null]],
        '/solicitud_subraza_habilidades' => [[['_route' => 'app_solicitud_subraza_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_subraza'], null, null, null, false, false, null]],
        '/solicitud_trasfondos' => [[['_route' => 'app_solicitud_trasfondos', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Trasfondos'], null, null, null, false, false, null]],
        '/solicitud_trasfondo_habilidades' => [[['_route' => 'app_solicitud_trasfondo_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_trasfondo'], null, null, null, false, false, null]],
        '/revisiones_trasfondos' => [[['_route' => 'app_revisiones_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_trasfondos'], null, null, null, false, false, null]],
        '/solicitud_dote' => [[['_route' => 'app_solicitud_dote', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Dotes'], null, null, null, false, false, null]],
        '/revisiones_dotes' => [[['_route' => 'app_revisiones_dote', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_dotes'], null, null, null, false, false, null]],
        '/solicitud_hechizo' => [[['_route' => 'app_solicitud_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Hechizos'], null, null, null, false, false, null]],
        '/revisiones_hechizos' => [[['_route' => 'app_revisiones_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_hechizos'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', 'path' => '/login', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/clase/([^/]++)(*:22)'
                .'|/s(?'
                    .'|ub(?'
                        .'|clase/([^/]++)(*:53)'
                        .'|raza/([^/]++)(*:73)'
                    .')'
                    .'|olicitud_(?'
                        .'|clase/([^/]++)(*:107)'
                        .'|sub(?'
                            .'|clase/([^/]++)(*:135)'
                            .'|raza/([^/]++)(*:156)'
                        .')'
                        .'|raza/([^/]++)(*:178)'
                        .'|trasfondo/([^/]++)(*:204)'
                        .'|dote/([^/]++)(*:225)'
                        .'|hechizo/([^/]++)(*:249)'
                    .')'
                .')'
                .'|/raza/([^/]++)(*:273)'
                .'|/trasfondo/([^/]++)(*:300)'
                .'|/dote/([^/]++)(*:322)'
                .'|/hechizo/([^/]++)(*:347)'
                .'|/validar_(?'
                    .'|clase/([^/]++)(*:381)'
                    .'|sub(?'
                        .'|clase/([^/]++)(*:409)'
                        .'|raza/([^/]++)(*:430)'
                    .')'
                    .'|raza/([^/]++)(*:452)'
                    .'|trasfondo/([^/]++)(*:478)'
                    .'|dote/([^/]++)(*:499)'
                    .'|hechizo/([^/]++)(*:523)'
                .')'
                .'|/eliminar_(?'
                    .'|clase/([^/]++)(*:559)'
                    .'|sub(?'
                        .'|clase/([^/]++)(*:587)'
                        .'|raza/([^/]++)(*:608)'
                    .')'
                    .'|raza/([^/]++)(*:630)'
                    .'|trasfondo/([^/]++)(*:656)'
                    .'|dote/([^/]++)(*:677)'
                    .'|hechizos/([^/]++)(*:702)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        22 => [[['_route' => 'app_clase', '_controller' => 'App\\Controller\\BuscadorController::clasesok'], ['id'], null, null, false, true, null]],
        53 => [[['_route' => 'app_subclase', '_controller' => 'App\\Controller\\BuscadorController::subok'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'app_subraza', '_controller' => 'App\\Controller\\BuscadorController::subzara'], ['id'], null, null, false, true, null]],
        107 => [[['_route' => 'app_comprobar_clase', '_controller' => 'App\\Controller\\SolicitudesController::clasesok'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'app_comprobar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::subclaseok'], ['id'], null, null, false, true, null]],
        156 => [[['_route' => 'app_comprobar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::subrazaok'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'app_comprobar_raza', '_controller' => 'App\\Controller\\SolicitudesController::razaok'], ['id'], null, null, false, true, null]],
        204 => [[['_route' => 'app_comprobar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::trasfondook'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'app_comprobar_dote', '_controller' => 'App\\Controller\\SolicitudesController::doteok'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'app_comprobar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::hechizook'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'app_raza', '_controller' => 'App\\Controller\\BuscadorController::razasok'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'app_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::trasfondook'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'app_dote', '_controller' => 'App\\Controller\\BuscadorController::doteok'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'app_hechizo', '_controller' => 'App\\Controller\\BuscadorController::hechizook'], ['id'], null, null, false, true, null]],
        381 => [[['_route' => 'app_validar_clase', '_controller' => 'App\\Controller\\SolicitudesController::validarClase'], ['id'], null, null, false, true, null]],
        409 => [[['_route' => 'app_validar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::validarSubclase'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'app_validar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::validarSubrazas'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'app_validar_raza', '_controller' => 'App\\Controller\\SolicitudesController::validarRazas'], ['id'], null, null, false, true, null]],
        478 => [[['_route' => 'app_validar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::validarTrasfondos'], ['id'], null, null, false, true, null]],
        499 => [[['_route' => 'app_validar_dote', '_controller' => 'App\\Controller\\SolicitudesController::validarDotes'], ['id'], null, null, false, true, null]],
        523 => [[['_route' => 'app_validar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::validarHechizos'], ['id'], null, null, false, true, null]],
        559 => [[['_route' => 'app_eliminar_clase', '_controller' => 'App\\Controller\\SolicitudesController::eliminarClase'], ['id'], null, null, false, true, null]],
        587 => [[['_route' => 'app_eliminar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::eliminarSubclase'], ['id'], null, null, false, true, null]],
        608 => [[['_route' => 'app_eliminar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::eliminarSubraza'], ['id'], null, null, false, true, null]],
        630 => [[['_route' => 'app_eliminar_raza', '_controller' => 'App\\Controller\\SolicitudesController::eliminarRaza'], ['id'], null, null, false, true, null]],
        656 => [[['_route' => 'app_eliminar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::eliminarTrasfondo'], ['id'], null, null, false, true, null]],
        677 => [[['_route' => 'app_eliminar_dote', '_controller' => 'App\\Controller\\SolicitudesController::eliminarDote'], ['id'], null, null, false, true, null]],
        702 => [
            [['_route' => 'app_eliminar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::eliminarHechizo'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

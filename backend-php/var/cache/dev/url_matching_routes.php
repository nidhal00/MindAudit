<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/calendar' => [[['_route' => 'app_admin_calendar', '_controller' => 'App\\Controller\\Admin\\AdminController::calendar'], null, null, null, false, false, null]],
        '/admin/export/pdf' => [[['_route' => 'app_admin_export_pdf', '_controller' => 'App\\Controller\\Admin\\AdminController::exportReport'], null, null, null, false, false, null]],
        '/admin/api/calendar/events' => [[['_route' => 'app_admin_calendar_api', '_controller' => 'App\\Controller\\Admin\\CalendarController::getEvents'], null, ['GET' => 0], null, false, false, null]],
        '/admin/document' => [[['_route' => 'app_document_index', '_controller' => 'App\\Controller\\Admin\\DocumentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/document/search' => [[['_route' => 'app_document_search', '_controller' => 'App\\Controller\\Admin\\DocumentController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/entreprise' => [[['_route' => 'app_entreprise_index', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/entreprise/search' => [[['_route' => 'app_entreprise_search', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/entreprise/new' => [[['_route' => 'app_entreprise_new', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/export/entreprises' => [[['_route' => 'app_export_entreprises', '_controller' => 'App\\Controller\\Admin\\ExportController::exportEntreprises'], null, ['GET' => 0], null, false, false, null]],
        '/admin/export/documents' => [[['_route' => 'app_export_documents', '_controller' => 'App\\Controller\\Admin\\ExportController::exportDocuments'], null, ['GET' => 0], null, false, false, null]],
        '/admin/history' => [[['_route' => 'app_admin_history_index', '_controller' => 'App\\Controller\\Admin\\HistoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/role' => [[['_route' => 'app_admin_role_index', '_controller' => 'App\\Controller\\Admin\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role/new' => [[['_route' => 'app_admin_role_new', '_controller' => 'App\\Controller\\Admin\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stats' => [[['_route' => 'app_admin_stats', '_controller' => 'App\\Controller\\Admin\\StatistiqueController::index'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'app_admin_utilisateur_index', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur/new' => [[['_route' => 'app_admin_utilisateur_new', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/calendar/events' => [[['_route' => 'api_calendar_events', '_controller' => 'App\\Controller\\Api\\CalendarController::getEvents'], null, ['GET' => 0], null, false, false, null]],
        '/api/chatbot/ask' => [[['_route' => 'api_chatbot_ask', '_controller' => 'App\\Controller\\Api\\ChatbotController::ask'], null, ['POST' => 0], null, false, false, null]],
        '/api/document/upload' => [[['_route' => 'api_document_upload', '_controller' => 'App\\Controller\\Api\\DocumentUploadController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/api/geo/entreprises' => [[['_route' => 'api_geo_entreprises', '_controller' => 'App\\Controller\\Api\\GeoController::entreprises'], null, ['GET' => 0], null, false, false, null]],
        '/api/geo/geocode' => [[['_route' => 'api_geo_geocode', '_controller' => 'App\\Controller\\Api\\GeoController::geocode'], null, ['GET' => 0], null, false, false, null]],
        '/api/rapport/generer' => [[['_route' => 'api_rapport_generer', '_controller' => 'App\\Controller\\Api\\ReportController::generate'], null, ['GET' => 0], null, false, false, null]],
        '/api/rapport/stats/summary' => [[['_route' => 'api_stats_summary', '_controller' => 'App\\Controller\\Api\\ReportController::statsSummary'], null, ['GET' => 0], null, false, false, null]],
        '/employee/login' => [[['_route' => 'app_employee_login', '_controller' => 'App\\Controller\\Client\\DashboardController::login'], null, null, null, false, false, null]],
        '/employee/logout' => [[['_route' => 'app_employee_logout', '_controller' => 'App\\Controller\\Client\\DashboardController::logout'], null, null, null, false, false, null]],
        '/employee/dashboard' => [[['_route' => 'app_employee_dashboard', '_controller' => 'App\\Controller\\Client\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/employee/download-pdf' => [[['_route' => 'app_employee_download_pdf', '_controller' => 'App\\Controller\\Client\\DashboardController::downloadPdf'], null, null, null, false, false, null]],
        '/employee/upload' => [[['_route' => 'app_employee_upload', '_controller' => 'App\\Controller\\Client\\DashboardController::upload'], null, null, null, false, false, null]],
        '/employee/entreprise/edit' => [[['_route' => 'app_employee_edit_entreprise', '_controller' => 'App\\Controller\\Client\\DashboardController::editEntreprise'], null, ['POST' => 0], null, false, false, null]],
        '/employee/entreprise/delete' => [[['_route' => 'app_employee_delete_entreprise', '_controller' => 'App\\Controller\\Client\\DashboardController::deleteEntreprise'], null, ['POST' => 0], null, false, false, null]],
        '/employee/recover' => [[['_route' => 'app_employee_recover', '_controller' => 'App\\Controller\\Client\\RecoveryController::recover'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front_home', '_controller' => 'App\\Controller\\Public\\FrontController::index'], null, null, null, false, false, null]],
        '/annuaire' => [[['_route' => 'app_front_annuaire', '_controller' => 'App\\Controller\\Public\\FrontController::annuaire'], null, null, null, false, false, null]],
        '/espace-entreprise' => [[['_route' => 'app_front_espace_entreprise', '_controller' => 'App\\Controller\\Public\\FrontController::espaceEntreprise'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_front_register', '_controller' => 'App\\Controller\\Public\\FrontController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/suivi' => [[['_route' => 'app_front_status', '_controller' => 'App\\Controller\\Public\\FrontController::status'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/success' => [[['_route' => 'app_front_registration_success', '_controller' => 'App\\Controller\\Public\\FrontController::registrationSuccess'], null, null, null, false, false, null]],
        '/api/check-owner' => [[['_route' => 'api_check_owner', '_controller' => 'App\\Controller\\Public\\FrontController::apiCheckOwner'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|document/(?'
                            .'|(\\d+)/edit(*:77)'
                            .'|(\\d+)/validate(*:98)'
                            .'|(\\d+)/reject(*:117)'
                            .'|(\\d+)/pdf(*:134)'
                            .'|(\\d+)(?'
                                .'|(*:150)'
                            .')'
                        .')'
                        .'|entreprise/(?'
                            .'|(\\d+)/edit(*:184)'
                            .'|(\\d+)/validate(*:206)'
                            .'|(\\d+)/reject(*:226)'
                            .'|(\\d+)/pdf(*:243)'
                            .'|(\\d+)(?'
                                .'|(*:259)'
                            .')'
                        .')'
                        .'|role/([^/]++)(?'
                            .'|(*:285)'
                            .'|/edit(*:298)'
                            .'|(*:306)'
                        .')'
                        .'|utilisateur/([^/]++)(?'
                            .'|(*:338)'
                            .'|/(?'
                                .'|edit(*:354)'
                                .'|toggle(*:368)'
                            .')'
                            .'|(*:377)'
                        .')'
                    .')'
                    .'|pi/calendar/resize/([^/]++)(*:414)'
                .')'
                .'|/employee/(?'
                    .'|audit/report/([^/]++)(*:457)'
                    .'|document/(?'
                        .'|view/([^/]++)(*:490)'
                        .'|delete/([^/]++)(*:513)'
                    .')'
                .')'
                .'|/verify/([^/]++)(*:539)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'app_document_edit', '_controller' => 'App\\Controller\\Admin\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'app_document_validate', '_controller' => 'App\\Controller\\Admin\\DocumentController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        117 => [[['_route' => 'app_document_reject', '_controller' => 'App\\Controller\\Admin\\DocumentController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        134 => [[['_route' => 'app_document_pdf', '_controller' => 'App\\Controller\\Admin\\DocumentController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        150 => [
            [['_route' => 'app_document_delete', '_controller' => 'App\\Controller\\Admin\\DocumentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_document_show', '_controller' => 'App\\Controller\\Admin\\DocumentController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        184 => [[['_route' => 'app_entreprise_edit', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'app_entreprise_validate', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        226 => [[['_route' => 'app_entreprise_reject', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        243 => [[['_route' => 'app_entreprise_pdf', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        259 => [
            [['_route' => 'app_entreprise_delete', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_entreprise_show', '_controller' => 'App\\Controller\\Admin\\EnterpriseController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        285 => [[['_route' => 'app_admin_role_show', '_controller' => 'App\\Controller\\Admin\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_admin_role_edit', '_controller' => 'App\\Controller\\Admin\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'app_admin_role_delete', '_controller' => 'App\\Controller\\Admin\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_admin_utilisateur_show', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_admin_utilisateur_edit', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'app_admin_utilisateur_toggle', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::toggleActif'], ['id'], ['POST' => 0], null, false, false, null]],
        377 => [[['_route' => 'app_admin_utilisateur_delete', '_controller' => 'App\\Controller\\Admin\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        414 => [[['_route' => 'api_calendar_resize', '_controller' => 'App\\Controller\\Api\\CalendarController::resize'], ['id'], ['PUT' => 0], null, false, true, null]],
        457 => [[['_route' => 'app_employee_audit_report', '_controller' => 'App\\Controller\\Client\\AuditController::generateReport'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'app_employee_document_view', '_controller' => 'App\\Controller\\Client\\DashboardController::viewDocument'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'app_employee_document_delete', '_controller' => 'App\\Controller\\Client\\DashboardController::deleteDocument'], ['id'], ['POST' => 0], null, false, true, null]],
        539 => [
            [['_route' => 'app_front_verify', '_controller' => 'App\\Controller\\Public\\FrontController::verify'], ['accessCode'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

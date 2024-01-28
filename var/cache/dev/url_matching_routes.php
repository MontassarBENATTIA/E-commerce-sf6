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
        '/category' => [[['_route' => 'category.index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/creation' => [[['_route' => 'category.new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product.index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/creation' => [[['_route' => 'product.new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, null, null, false, false, null]],
        '/handleSearch' => [[['_route' => 'handleSearch', '_controller' => 'App\\Controller\\Admin\\ProductController::handleSearch'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation.index', '_controller' => 'App\\Controller\\Admin\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/user/orders' => [[['_route' => 'cart_user_order_list', '_controller' => 'App\\Controller\\CartController::userOrders'], null, null, null, false, false, null]],
        '/cart/delete' => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\Client\\ContactController::index'], null, null, null, false, false, null]],
        '/addCoordinate' => [[['_route' => 'add_coordinate', '_controller' => 'App\\Controller\\CoordinateController::addCoordinate'], null, null, null, false, false, null]],
        '/detail' => [[['_route' => 'detail_command', '_controller' => 'App\\Controller\\DetailController::details_comande'], null, ['GET' => 0], null, false, false, null]],
        '/detailadmin' => [[['_route' => 'detail_commandadmin', '_controller' => 'App\\Controller\\DetailController::details_comandeadmin'], null, ['GET' => 0], null, false, false, null]],
        '/editor' => [[['_route' => 'editor.list', '_controller' => 'App\\Controller\\EditorController::index'], null, null, null, true, false, null]],
        '/editor/add' => [[['_route' => 'editor.add', '_controller' => 'App\\Controller\\EditorController::addEditor'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/commandes' => [[['_route' => 'orders_list', '_controller' => 'App\\Controller\\OrderController::afficher'], null, null, null, false, false, null]],
        '/user/orders' => [[['_route' => 'user_order_list', '_controller' => 'App\\Controller\\OrderController::userOrders'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'livraison.new', '_controller' => 'App\\Controller\\OrderController::new'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/success-url' => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'cancel-url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ProductsController::indexHome'], null, null, null, false, false, null]],
        '/pro' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
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
                .'|/ca(?'
                    .'|tegory/(?'
                        .'|edition/([^/]++)(*:201)'
                        .'|suppression/([^/]++)(*:229)'
                    .')'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:256)'
                        .'|remove/([^/]++)(*:279)'
                        .'|delete/([^/]++)(*:302)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|edition/([^/]++)(*:340)'
                    .'|suppression/([^/]++)(*:368)'
                    .'|([^/]++)(*:384)'
                    .'|details/([^/]++)(*:408)'
                .')'
                .'|/reclamation/suppression/([^/]++)(*:450)'
                .'|/editor/(?'
                    .'|alls(?:/([^/]++)(?:/([^/]++))?)?(*:501)'
                    .'|(\\d+)(*:514)'
                    .'|edit(?:/([^/]++))?(*:540)'
                    .'|delete/([^/]++)(*:563)'
                    .'|update/([^/]++)/([^/]++)/([^/]++)(*:604)'
                .')'
                .'|/update/order/([^/]++)/([^/]++)(*:644)'
                .'|/oubli\\-pass/([^/]++)(*:673)'
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
        201 => [[['_route' => 'category.edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        229 => [[['_route' => 'category.delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'product.edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        368 => [[['_route' => 'product.delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'product_category', '_controller' => 'App\\Controller\\ProductsController::categoryProducts'], ['category'], null, null, false, true, null]],
        408 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductsController::show'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'reclamation.delete', '_controller' => 'App\\Controller\\Admin\\ReclamationController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'editor.list.alls', 'page' => '1', 'nbre' => '8', '_controller' => 'App\\Controller\\EditorController::indexAlls'], ['page', 'nbre'], null, null, false, true, null]],
        514 => [[['_route' => 'editor.detail', '_controller' => 'App\\Controller\\EditorController::detail'], ['id'], null, null, false, true, null]],
        540 => [[['_route' => 'editor.edit', 'id' => '0', '_controller' => 'App\\Controller\\EditorController::EditEditor'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'editor.delete', '_controller' => 'App\\Controller\\EditorController::deleteEditor'], ['id'], null, null, false, true, null]],
        604 => [[['_route' => 'editor.update', '_controller' => 'App\\Controller\\EditorController::updateEditor'], ['id', 'firstname', 'email'], null, null, false, true, null]],
        644 => [[['_route' => 'order_status_update', '_controller' => 'App\\Controller\\OrderController::updateOrderStatus'], ['order', 'status'], null, null, false, true, null]],
        673 => [
            [['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

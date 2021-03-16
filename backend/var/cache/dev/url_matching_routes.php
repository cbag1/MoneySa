<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/transaction' => [
            [['_route' => 'api_transactions_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_transactions_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/agence' => [
            [['_route' => 'api_agences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_agences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/transactioncompte' => [
            [['_route' => 'api_compte_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CompteUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_compte_users_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CompteUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/client' => [
            [['_route' => 'api_clients_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_clients_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/client-agence' => [
            [['_route' => 'api_client_agences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_client_agences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/users' => [
            [['_route' => 'api_users_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'GET'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'POST'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|client\\-agence/user/([^/]++)(*:81)'
                        .'|transaction/(?'
                            .'|code/([^/]++)(*:116)'
                            .'|agent/([^/]++)(*:138)'
                        .')'
                        .'|users/([^/]++)/agence(*:168)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:205)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:236)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:278)'
                                .'|mptes(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:312)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:350)'
                                    .')'
                                .')'
                            .')'
                            .'|lient(?'
                                .'|/(\\d+)(?'
                                    .'|(*:378)'
                                .')'
                                .'|\\-agence/(?'
                                    .'|(\\d+)(?'
                                        .'|(*:407)'
                                    .')'
                                    .'|user/([^/]++)(*:429)'
                                .')'
                            .')'
                        .')'
                        .'|profils(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:468)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:506)'
                            .')'
                        .')'
                        .'|transaction(?'
                            .'|/(?'
                                .'|(\\d+)(?'
                                    .'|(*:542)'
                                .')'
                                .'|code/([^/]++)(*:564)'
                                .'|agent/([^/]++)(*:586)'
                            .')'
                            .'|compte/(\\d+)(?'
                                .'|(*:610)'
                            .')'
                        .')'
                        .'|agence(?'
                            .'|/(\\d+)(?'
                                .'|(*:638)'
                            .')'
                            .'|s/([^/]++)/compte(?:\\.([^/]++))?(*:679)'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)/agence(*:712)'
                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:748)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'get_client_by_agence', '__controller' => 'App\\Controller\\ClientAgenceController::get_clients', '__api_resource_class' => 'ClientAgence', '__api_collection_operation_name' => 'get_client_by_agence', '_controller' => 'App\\Controller\\ClientAgenceController::get_clients'], ['id'], ['GET' => 0], null, false, true, null]],
        116 => [[['_route' => 'get_transaction', '__controller' => 'App\\Controller\\TransactionController::get_transaction', '__api_resource_class' => 'Transaction', '__api_collection_operation_name' => 'get_transaction', '_controller' => 'App\\Controller\\TransactionController::get_transaction'], ['code'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'get_transaction_by_user', '__controller' => 'App\\Controller\\TransactionController::get_transaction_by_user', '__api_resource_class' => 'Transaction', '__api_collection_operation_name' => 'get_transaction_by_user', '_controller' => 'App\\Controller\\TransactionController::get_transaction_by_user'], ['id'], ['GET' => 0], null, false, true, null]],
        168 => [[['_route' => 'get_agence', '__controller' => 'App\\Controller\\UserController::get_agence', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'get_agence', '_controller' => 'App\\Controller\\UserController::get_agence'], ['id'], ['GET' => 0], null, false, false, null]],
        205 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        236 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        278 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        312 => [
            [['_route' => 'api_comptes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        350 => [
            [['_route' => 'api_comptes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comptes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_comptes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        378 => [
            [['_route' => 'api_clients_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        407 => [
            [['_route' => 'api_client_agences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_client_agences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_client_agences_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'DELETE'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        429 => [[['_route' => 'api_client_agences_get_client_by_user_item', '_controller' => 'ClientAgenceController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ClientAgence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_client_by_user'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        506 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        542 => [
            [['_route' => 'api_transactions_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_transactions_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'DELETE'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        564 => [[['_route' => 'api_transactions_get_transaction_item', '_controller' => 'TransactionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_transaction', 'identifiedBy' => 'code'], ['code'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'api_transactions_get_transaction_by_user_item', '_controller' => 'TransactionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_transaction_by_user'], ['id'], ['GET' => 0], null, false, true, null]],
        610 => [
            [['_route' => 'api_compte_users_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CompteUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_users_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CompteUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        638 => [
            [['_route' => 'api_agences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_agences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'PUT'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_agences_DELETE_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agence', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'DELETE'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        679 => [[['_route' => 'api_agences_compte_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_identifiers' => ['id' => ['App\\Entity\\Agence', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_agences_compte_get_subresource', '_api_subresource_context' => ['property' => 'compte', 'identifiers' => ['id' => ['App\\Entity\\Agence', 'id', true]], 'collection' => false, 'operationId' => 'api_agences_compte_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        712 => [[['_route' => 'api_users_get_agence_collection', '_controller' => 'UserController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get_agence'], ['id'], ['GET' => 0], null, false, false, null]],
        748 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

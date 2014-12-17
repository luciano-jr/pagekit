<?php

return [

    'main' => 'Pagekit\\Page\\PageExtension',

    'autoload' => [

        'Pagekit\\Page\\' => 'src'

    ],

    'controllers' => [

        '/page' => [
            'Pagekit\\Page\\Controller\\PageController',
            'Pagekit\\Page\\Controller\\SiteController'
        ]

    ],

    'menu' => [

        'page' => [
            'label'    => 'Pages',
            'icon'     => 'extension://page/extension.svg',
            'url'      => '@page/page',
            'active'   => '@page/page*',
            'access'   => 'page: manage pages',
            'priority' => 0
        ]

    ],

    'permissions' => [

        'page: manage pages' => [
            'title' => 'Manage pages'
        ]

    ]

];

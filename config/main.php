<?php
return [
    // The path map of the application components
    'componentsRootMap' => [
        'models'      => '/models',
        'controllers' => '/controllers',
        'views'       => '/views/views',
        'layouts'     => '/views/layouts',
        'snippets'    => '/views/snippets',
        'images'      => '/assets/imgs', //Real path: /web/assets/imgs'
        'js'          => '/js',          //Real path: /web/js'
        'css'         => '/css',         //Real path: /web/css'
    ],
    // The default name of the layout
    'defaultLayout'     => 'main',
    // The routing table that contains the correspondence between the request URL
    // and the Controller-Action pair
    'routeMap'          => [
        'cli'    => [
            '--test' => [
                'ctrl' => ['Cli', 'actionTest'],
            ],
        ],
        'get'    => [
            '/'  => [
                'ctrl' => ['Test', 'actionDefault'],
                'auth' => true,
            ],
            '.*' => [
                'ctrl' => ['System', 'actionPage404'],
                'auth' => false,
            ],
        ],
        'post'   => [
            '.*' => [
                'ctrl' => ['System', 'actionPage404'],
                'auth' => false,
            ],
        ],
        'put'    => [
            '.*' => [
                'ctrl' => ['System', 'actionPage404'],
                'auth' => false,
            ],
        ],
        'delete' => [
            '.*' => [
                'ctrl' => ['System', 'actionPage404'],
                'auth' => false,
            ],
        ],
    ],
    // Database settings
    'db'                => is_readable(__DIR__.'/db.local.php')
    ? require __DIR__.'/db.local.php'
    : [
        'host'     => '',
        'username' => '',
        'password' => '',
        'dbname'   => '',
        'charset'  => '',
    ],
];

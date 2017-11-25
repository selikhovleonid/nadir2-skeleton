<?php
return [
    'componentsRootMap' => [
        'models'      => '/models',
        'controllers' => '/controllers',
        'views'       => '/views/views',
        'layouts'     => '/views/layouts',
        'snippets'    => '/views/snippets',
        'images'      => '/web/assets/imgs',
        'js'          => '/web/js',
        'css'         => '/web/css'
    ],
    'defaultLayout'     => 'main',
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
    'db'                => is_readable(__DIR__.'/db.local.php')
    ? require __DIR__.'/db.local.php'
    : [
        'host'     => '',
        'username' => '',
        'password' => '',
        'dbname'   => ''
    ],
];

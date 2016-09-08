<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'components' => [

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'db' => require (dirname(__DIR__).'/config/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

                'contact' => '/main/main/contact',
                'login' => '/main/main/login',
                'logout' => '/main/main/logout',
                'register' => '/main/main/register',
                '/' => 'site/index',
            ],
        ],
    ],
];

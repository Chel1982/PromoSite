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
                'home' => 'site/index',
                'contact' => '/site/contact',
                'login' => '/site/login',
                'logout' => '/site/logout',
                'register' => '/site/register',
                '/' => 'site/index',
            ],
        ],
    ],
];

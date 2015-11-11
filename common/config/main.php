<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'user' => [
            'class' => 'sheillendra\user\Module'
        ],
        'reference' => [
            'class' => 'sheillendra\reference\Module'
        ],
    ],
    'components' => [
        'user' => [
            'class' => 'sheillendra\user\components\User',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ]
    ],
];

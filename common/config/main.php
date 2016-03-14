<?php
return [
    'name' => 'Jedzonko.pl',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];

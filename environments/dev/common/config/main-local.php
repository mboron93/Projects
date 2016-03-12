<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=projectdb',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                 'class' => 'Swift_SmtpTransport',
                  'host' => 'mailtrap.io',
                  'username' => '56711301c791e9ac9',
                 'password' => 'bfe72eaa4da096',
                 'port' => 2525,
                'encryption' => 'tls',
                ],
        ],
    ],
];

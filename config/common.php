<?php

return [
    'app' => [
        'basePath' => dirname(__DIR__) . '/src',
        'controllerNamespace' => app\controllers::class,
        /*
        'controllerMap' => [
            'fixture' => [ // Fixture generation command line.
                '__class' => 'yii\faker\FixtureController',
            ],
        ],
        */
    ],

    'logger' => [
        '__construct()' => [
            'targets' => [
                [
                    '__class' => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],

    'cache' => [
        '__class' => yii\cache\Cache::class,
        'handler' => [
            '__class' => yii\cache\FileCache::class,
            'keyPrefix' => 'my-project',
        ],
    ],

    'translator' => [
        'translations' => [
            'app' => [
                '__class' => yii\i18n\PhpMessageSource::class,
                'sourceLanguage' => 'en-US',
                'basePath' => '@app/messages',
            ],
        ],
    ],
];
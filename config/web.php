<?php

use yii\web\UrlManager;


$config = [
    'app' => [
        '__class' => yii\web\Application::class,
        'controllerNamespace' => app\controllers::class,
        'bootstrap' => [],
        'modules' => [],
    ],
    'user' => [
        'identityClass' => app\models\User::class, // User must implement the IdentityInterface
    ],
    'request' => [
        'enableCookieValidation' => false,
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '',
    ],
    'assetManager' => [
        'appendTimestamp' => true,
        'bundles' => [
            'yii\bootstrap4\BootstrapAsset' => [
                'sourcePath' => null,
                'css' => [],
            ],
        ]
    ],
    'urlManager' => [
        '__class' => UrlManager::class,
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
            'components/index' => 'components/index',
            'components/<id:.*>' => 'components/component',
        ],
    ],
];

if ($params['debug.enabled']) {
    $config['app']['bootstrap']['debug'] = 'debug';
    $config['app']['modules']['debug'] = array_filter([
        '__class' => \yii\debug\Module::class,
        'allowedIPs' => $params['debug.allowedIPs'],
        'panels' => [
            'config' => [
                '__class' => \yii\debug\panels\ConfigPanel::class,
            ],
            'request' => [
                '__class' => \yii\debug\panels\RequestPanel::class,
            ],
            'log' => [
                '__class' => \yii\debug\panels\LogPanel::class,
            ],
            'profiling' => [
                '__class' => \yii\debug\panels\ProfilingPanel::class,
            ],
            'db' => new \yii\helpers\UnsetArrayValue(),
            'event' => [
                '__class' => \yii\debug\panels\EventPanel::class,
            ],
            'assets' => new \yii\helpers\UnsetArrayValue(),
            'mail' => [
                '__class' => \yii\debug\panels\MailPanel::class,
            ],
            'timeline' => [
                '__class' => \yii\debug\panels\TimelinePanel::class,
            ],
            'user' => new \yii\helpers\UnsetArrayValue(),
            'router' => new \yii\helpers\UnsetArrayValue(),
        ],
    ]);

}

return $config;
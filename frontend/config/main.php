<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['languagepicker'], //['log'],
    'language' => 'en',
    'modules' => [
        'admn' => [
                'class' => 'mdm\admin\Module',
                'layout' => 'left-menu',                
            ]
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'languagepicker' => [
            'class' => 'lajax\languagepicker\Component',
            // List of available languages (icons only)
            'languages' => ['en' => 'English', 'ru' => 'Русский', 'uz' => 'O\'zbek'],
        ],


        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl'=>'',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n'=>[
            'translations'=>[
                'common*'=>[
                    'class'=>'yii\i18n\PhpMessageSource',
                    'basePath'=>'@app/messages',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
//            'class'=>'codemix\localeurls\UrlManager',
//            'languages'=>['uz', 'ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                // '<controller:\w+>/<action:\w+>/'=>'<controller>/<action>',
            ],
        ],
        
    ],
    'params' => $params,
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            // 'admn/*',
        ],
        
    ],
];

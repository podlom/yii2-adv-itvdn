<?php
return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),

    // i18n configuration
    'language' => 'en-EN',
    'sourceLanguage' => 'en-US',

    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
        ],
    ],
];

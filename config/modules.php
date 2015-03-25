<?php

return [
    'user' => [
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => true,
        'confirmWithin' => 21600,
        'cost' => 12,
        'admins' => ['admin']
    ],
    'qa' => [
        'class' => 'artkost\qa\Module',
        'userNameFormatter' => function($model) {
            return $model->username ? $model->username : $model->id;
        }
    ],
];

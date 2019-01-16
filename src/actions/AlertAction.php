<?php

namespace app\actions;

use yii\bootstrap4\Alert;
use app\components\ConfigBasedAction;

class AlertAction extends ConfigBasedAction
{
    public function getClass(): string 
    {
        return Alert::class;
    }

    public function getConfig(): array 
    {
        $config = [
            'Basic' => [
            ],
        ];

        foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type) {
            $config['Basic'][] = ['options' => [
                'class' => 'alert-' . $type
            ], 'body' => 'A simple ' . $type . ' alert—check it out!'];
        }

        $config['Without close button'] = [[
            'options' => ['class' => 'alert-warning'],
            'closeButton' => false,
            'body' => 'You\'re screwed',
        ]];

        return $config;        
    }
}
<?php

namespace app\actions;

use yii\bootstrap4\Button;
use app\components\ConfigBasedAction;

class ButtonAction extends ConfigBasedAction
{
    public function getClass(): string 
    {
        return Button::class;
    }

    public function getConfig(): array 
    {
        $config = [
            'Basic' => [],
            'Outline' => [],
        ];

        foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'] as $type) {
            $label = ucfirst($type);
            
            $config['Basic'][] = ['options' => [
                'class' => 'btn-' . $type
            ], 'label' => $label];
            
            if ($type !== 'link') {
                $config['Outline'][] = ['options' => [
                    'class' => 'btn-outline-' . $type
                ], 'label' => ucfirst($type)];    
            }
        }

        return $config;        
    }
}
<?php

namespace app\actions;

use yii\bootstrap4\Nav;
use app\components\ConfigBasedAction;

class NavAction extends ConfigBasedAction
{
    public function getClass(): string 
    {
        return Nav::class;
    }

    public function getConfig(): array 
    {
        return [
            'Default' => [
                [
                    'items' => [
                        [
                            'label' => 'Home',
                            'url' => ['site/index'],
                            'active' => true,
                        ],
                        [
                            'label' => 'Dropdown',
                            'items' => [
                                 ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                                 '<div class="dropdown-divider"></div>',
                                 '<div class="dropdown-header">Dropdown Header</div>',
                                 ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                            ],
                        ],
                        [
                            'label' => 'Login',
                            'url' => ['site/login'],
                            'visible' => false,
                        ],
                    ],
                    'options' => ['class' =>'nav-pills'],
                ]
            ],
        ];     
    }
}
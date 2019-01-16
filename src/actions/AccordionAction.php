<?php

namespace app\actions;

use yii\bootstrap4\Accordion;
use app\components\ConfigBasedAction;

class AccordionAction extends ConfigBasedAction
{
    public function getClass(): string
    {
        return Accordion::class;
    }

    public function getConfig(): array
    {
        return [
            'Basic' => [
                [
                    'items' => [
                        // equivalent to the above
                        [
                            'label' => 'Collapsible Group Item #1',
                            'content' => 'Anim pariatur cliche...',
                            // open its content by default
                            'contentOptions' => ['class' => 'in']
                        ],
                        // another group item
                        [
                            'label' => 'Collapsible Group Item #1',
                            'content' => 'Anim pariatur cliche...',
                            'contentOptions' => [],
                            'options' => [],
                        ],
                        // if you want to swap out .card-block with .list-group, you may use the following
                        [
                            'label' => 'Collapsible Group Item #1',
                            'content' => [
                                'Anim pariatur cliche...',
                                'Anim pariatur cliche...'
                            ],
                            'contentOptions' => [],
                            'options' => [],
                            'footer' => 'Footer' // the footer label in list-group
                        ],
                    ]
                ]
            ],
        ];
    }
}
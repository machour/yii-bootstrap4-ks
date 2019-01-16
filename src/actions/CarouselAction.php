<?php

namespace app\actions;

use yii\bootstrap4\Carousel;
use app\components\ConfigBasedAction;

class CarouselAction extends ConfigBasedAction
{
    public function getClass(): string 
    {
        return Carousel::class;
    }

    public function getConfig(): array 
    {
        return [
            'Default' => [
                [
                    'items' => [
                        // the item contains only the image
                        '<img class="d-block" src="https://placekitten.com/600/300"/>',
                        // equivalent to the above
                        ['content' => '<img class="d-block" src="https://placekitten.com/g/600/300"/>'],
                        // the item contains both the image and the caption
                        [
                            'content' => '<img class="d-block" src="https://placekitten.com/600/300"/>',
                            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        
                        ],
                    ]
                ]
            ],
        ];     
    }
}
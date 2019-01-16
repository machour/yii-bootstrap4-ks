<?php

namespace app\actions;

use yii\bootstrap4\Progress;
use app\components\ConfigBasedAction;

/**
 * @property array $config
 */
class ProgressAction extends ConfigBasedAction
{
    public function getClass(): string
    {
        return Progress::class;
    }

    public function getConfig(): array
    {
        return [
            'Basic' => [
                ['percent' => 0],
                ['percent' => 25],
                ['percent' => 50],
                ['percent' => 75],
                ['percent' => 100],
            ],
            'Labels' => [
                ['percent' => 25, 'label' => '25%'],
            ],
            'Height' => [
                ['percent' => 25, 'options' => ['style' => 'height: 1px;']],
                ['percent' => 25, 'options' => ['style' => 'height: 20px;']],
            ],
            'Backgrounds' => [
                ['bars' => [['percent' => 25, 'options' => ['class' => 'bg-success']]]],
                ['bars' => [['percent' => 50, 'options' => ['class' => 'bg-info']]]],
                ['bars' => [['percent' => 75, 'options' => ['class' => 'bg-warning']]]],
                ['bars' => [['percent' => 100, 'options' => ['class' => 'bg-danger']]]],
            ],
            'Multiple bars' => [
                ['bars' => [
                    ['percent' => 15],
                    ['percent' => 30, 'options' => ['class' => 'bg-success']],
                    ['percent' => 20, 'options' => ['class' => 'bg-info']],
                ]],
            ],
            'Striped' => [
                ['bars' => [['percent' => 10, 'options' => ['class' => 'progress-bar-striped']]]],
                ['bars' => [['percent' => 25, 'options' => ['class' => 'bg-success progress-bar-striped']]]],
                ['bars' => [['percent' => 50, 'options' => ['class' => 'bg-info progress-bar-striped']]]],
                ['bars' => [['percent' => 75, 'options' => ['class' => 'bg-warning progress-bar-striped']]]],
                ['bars' => [['percent' => 100, 'options' => ['class' => 'bg-danger progress-bar-striped']]]],
            ],
            'Animated stripes' => [
                ['bars' => [['percent' => 75, 'options' => ['class' => 'progress-bar-striped progress-bar-animated']]]],
            ],
        ];
    }


}
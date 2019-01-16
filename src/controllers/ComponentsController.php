<?php

namespace app\controllers;

use yii\web\Controller;
use yii\bootstrap4\Progress;
use yii\web\NotFoundHttpException;

class ComponentsController extends Controller
{
    private $components = [
        'progress' => Progress::class,
    ];


    private $sections = [
        'progress' => [
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
        ],
    ];


    /**
     * Displays list of components.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'components' => $this->components,
        ]);
    }

    /**
     * Display a component
     */
    public function actionComponent($id)
    {
        if (!isset($this->components[$id])) {
            throw new NotFoundHttpException("Unknown component");
        }

        return $this->render('simple', [
            'id' => $id,
            'class' => $this->components[$id],
            'sections' => $this->sections[$id],
        ]);

    }
}

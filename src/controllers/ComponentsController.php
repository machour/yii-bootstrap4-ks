<?php

namespace app\controllers;

use yii\web\Controller;
use yii\bootstrap4\Accordion;
use yii\bootstrap4\Progress;
use yii\web\NotFoundHttpException;
use app\actions\ProgressAction;
use app\actions\AccordionAction;

class ComponentsController extends Controller
{
    public function actions()
    {
        return [
            'progress' => ['__class' => ProgressAction::class],
            'accordion' => ['__class' => AccordionAction::class],
        ];
    }

    public static $components = [
        'accordion' => Accordion::class,
        'progress' => Progress::class,
    ];

    /**
     * Displays list of components.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'components' => self::$components,
        ]);
    }

}

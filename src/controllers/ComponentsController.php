<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\bootstrap4\{
    Accordion,
    Alert,
    Progress
};
use app\actions\{
    AccordionAction, 
    AlertAction, 
    ProgressAction
};

class ComponentsController extends Controller
{
    public function actions()
    {
        return [
            'accordion' => ['__class' => AccordionAction::class],
            'alert' => ['__class' => AlertAction::class],
            'progress' => ['__class' => ProgressAction::class],
        ];
    }

    public static $components = [
        'alert' => Alert::class,
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

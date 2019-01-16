<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\bootstrap4\{
    Accordion,
    Alert,
    Button,
    Carousel,
    Nav,
    Progress
};
use app\actions\{
    AccordionAction, 
    AlertAction,
    ButtonAction,
    CarouselAction,
    NavAction,
    ProgressAction
};

class ComponentsController extends Controller
{
    public function actions()
    {
        return [
            'accordion' => ['__class' => AccordionAction::class],
            'alert' => ['__class' => AlertAction::class],
            'button' => ['__class' => ButtonAction::class],
            'carousel' => ['__class' => CarouselAction::class],
            'nav' => ['__class' => NavAction::class],
            'progress' => ['__class' => ProgressAction::class],
        ];
    }

    public static $components = [
        'alert' => Alert::class,
        'accordion' => Accordion::class,
        'button' => Button::class,
        'carousel' => Carousel::class,
        'nav' => Nav::class,
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

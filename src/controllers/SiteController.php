<?php

namespace app\controllers;

use yii\helpers\Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\filters\AccessControl;
use yii\web\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                '__class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        foreach (['error', 'warning', 'danger', 'success', 'info'] as $type) {
            $this->app->getSession()->addFlash($type, 'Hello World! This is a ' . $type . ' message.');
        }
        return $this->render('index');
    }
}

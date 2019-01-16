<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
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
        /*foreach (['error', 'warning', 'danger', 'success', 'info'] as $type) {
            $this->app->getSession()->addFlash($type, 'Hello World! This is a ' . $type . ' message.');
        }*/
        return $this->render('index');
    }
}

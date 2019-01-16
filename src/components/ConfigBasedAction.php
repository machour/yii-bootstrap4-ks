<?php

namespace app\components;

use yii\base\Action;

abstract class ConfigBasedAction extends Action
{
    abstract public function getConfig();
    abstract public function getClass();

    public function run()
    {
        return $this->controller->render('simple', [
            'class' => $this->class,
            //Progress::class,
            'id' => $this->id,
            //'progress',
            'sections' => $this->config,
        ]);
    }
}
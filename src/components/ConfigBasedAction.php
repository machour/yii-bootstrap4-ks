<?php

namespace app\components;

use yii\base\Action;

abstract class ConfigBasedAction extends Action
{
    abstract public function getConfig(): array;
    abstract public function getClass(): string;

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
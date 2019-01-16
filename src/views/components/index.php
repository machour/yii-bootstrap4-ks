<?php 
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\bootstrap4\Html;
foreach ($components as $id => $class): ?>

   <?= Html::a($class, ['components/component', 'id' => StringHelper::basename($id)]) ?>

<?php endforeach ?>
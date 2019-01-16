<?php 
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\bootstrap4\Html;

$this->params['breadcrumbs'][] = 'Components';

?>

<ul>
<?php foreach ($components as $id => $class): ?>
   <li><?= Html::a($class, ['components/' . $id]) ?></li>
<?php endforeach ?>
</ul>
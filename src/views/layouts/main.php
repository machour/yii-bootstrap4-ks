<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\helpers\Yii;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= $this->getApp()->language ?>">
<head>
    <meta charset="<?= $this->getApp()->encoding ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <?php NavBar::begin([
        'brandLabel' => $this->getApp()->name,
        'options' => [
            'class' => ['navbar-dark', 'bg-dark', 'navbar-expand-md']
        ]
    ]) ?>
    <?php NavBar::end(); ?>
</header>

<main role="main" class="container py-4">
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'] ?? [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="text-muted text-center">
            <?= Yii::t('yii', 'Powered by {yii}', [
                'yii' => '<a href="http://www.yiiframework.com/" rel="external">' . Yii::t('yii', 'Yii Framework') . '</a>',
            ]) ?>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'yiisoft/yii-bootstrap4 kitchen sink';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= $this->app->t('app', 'Congratulations!') ?></h1>

        <p class="lead"><?= $this->app->t('app', 'You have successfully created your Yii-powered application.') ?></p>

        <p><a class="btn btn-lg btn-info" href="<?= Url::to(['components/index']) ?>"><?= $this->app->t('app', 'Bootstrap components') ?></a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-8">
                <h2><?= $this->app->t('app', 'Info') ?></h2>

                <p>
                    This is the Index page. Its content is located at:
                </p>

                <code><?= Html::encode(__FILE__) ?></code>

            </div>
            <div class="col-lg-4 mt-2">
                <h2><?= $this->app->t('app', 'Documentation') ?></h2>

                <p>More information about Yii 3.x Framework online:</p>
                <ul>
                    <li><a href="http://www.yiiframework.com/forum/"><?= $this->app->t('app', 'Yii Forum') ?> &raquo;</a></li>
                    <li><a href="http://www.yiiframework.com/doc/"><?= $this->app->t('app', 'Yii Documentation') ?> &raquo;</a></li>
                    <li><a href="http://www.yiiframework.com/extensions/"><?= $this->app->t('app', 'Yii Extensions') ?> &raquo;</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

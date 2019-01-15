<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= $this->app->t('app', 'Congratulations!') ?></h1>

        <p class="lead"><?= $this->app->t('app', 'You have successfully created your Yii-powered application.') ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com"><?= $this->app->t('app', 'Get started with Yii') ?></a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2><?= $this->app->t('app', 'Info') ?></h2>

                <p>
                    This is the Index page. Its content is located at:
                </p>

                <code><?= Html::encode(__FILE__) ?></code>

            </div>
            <div class="col-lg-4">
                <h2><?= $this->app->t('app', 'Pages') ?></h2>

                <p>List of actions in the application-base site controller:</p>
                <p>
                    <?= Html::a('About', ['about']) ?>
                    <?= Html::a('Contact', ['contact']) ?>
                    <?= Html::a('Login', ['login']) ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2><?= $this->app->t('app', 'Documentation') ?></h2>

                <p>More information about Yii 3.x Framework online:</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/"><?= $this->app->t('app', 'Yii Faaorum') ?> &raquo;</a></p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/"><?= $this->app->t('app', 'Yii Documentation') ?> &raquo;</a></p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/"><?= $this->app->t('app', 'Yii Extensions') ?> &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

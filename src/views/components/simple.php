<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $sections [] */
/* @var $id string */
/* @var $class string */

$this->title = $class;

$className = StringHelper::basename($class);

$this->params['breadcrumbs'][] = ['url' => 'index', 'label' => 'Components'];
$this->params['breadcrumbs'][] = $className;


// https://stackoverflow.com/a/24316675/732772
function var_export54($var, $indent="") {
    switch (gettype($var)) {
        case "string":
            return '"' . addcslashes($var, "\\\$\"\r\n\t\v\f") . '"';
        case "array":
            $indexed = array_keys($var) === range(0, count($var) - 1);
            $r = [];
            foreach ($var as $key => $value) {
                $r[] = "$indent    "
                     . ($indexed ? "" : var_export54($key) . " => ")
                     . var_export54($value, "$indent    ");
            }
            return "[\n" . implode(",\n", $r) . "\n" . $indent . "]";
        case "boolean":
            return $var ? "TRUE" : "FALSE";
        default:
            return var_export($var, TRUE);
    }
}

?>

<div class="component-example component-<?= $id ?>">

<?php

?>
<h1><?= $class ?>::class <a class="float-right" href="https://getbootstrap.com/docs/4.1/components/<?= $id ?>/" target="_blank"><svg class="d-block" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false"><title>Bootstrap</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path></svg>
</a></h1>

<?php foreach ($sections as $section => $configs) : ?>
    <h2><?= $section ?></h2>

    <?php foreach ($configs as $config) : ?>
        <?= $class::widget($config) ?>
    <?php endforeach ?>

    <?php foreach ($configs as $config) : ?>
        <?php highlight_string('<?= ' . $className . '::widget(' . var_export54($config) . ') ?>'); ?>
    <?php endforeach ?>

<?php endforeach ?>
    
</div>

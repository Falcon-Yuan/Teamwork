<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\World */

$this->title = 'Update World: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Worlds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'id' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="world-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

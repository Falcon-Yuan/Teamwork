<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Medal */

$this->title = 'Update Medal: ' . $model->sport;
$this->params['breadcrumbs'][] = ['label' => 'Medals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sport, 'url' => ['view', 'id' => $model->sport]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Olympicnews */

$this->title = 'Update Olympicnews: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Olympicnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->title]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="olympicnews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

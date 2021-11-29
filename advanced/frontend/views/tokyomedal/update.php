<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tokyomedal */

$this->title = 'Update Tokyomedal: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Tokyomedals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'id' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tokyomedal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

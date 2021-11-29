<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chinaprojectmedal */

$this->title = 'Update Chinaprojectmedal: ' . $model->sport;
$this->params['breadcrumbs'][] = ['label' => 'Chinaprojectmedals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sport, 'url' => ['view', 'id' => $model->sport]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chinaprojectmedal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

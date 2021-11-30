<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Athlete */

$this->title = 'Update Athlete: ' . $model->athlete;
$this->params['breadcrumbs'][] = ['label' => 'Athletes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->athlete, 'url' => ['view', 'id' => $model->athlete]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="athlete-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

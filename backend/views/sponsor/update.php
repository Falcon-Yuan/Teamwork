<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sponsor */

$this->title = 'Update Sponsor: ' . $model->公司名称;
$this->params['breadcrumbs'][] = ['label' => 'Sponsors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->公司名称, 'url' => ['view', 'id' => $model->公司名称]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sponsor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OlympicsponsorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="olympicsponsor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '公司名称') ?>

    <?= $form->field($model, '赞助类别') ?>

    <?= $form->field($model, '企业简介') ?>

    <?= $form->field($model, '与国际奥委会交集') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

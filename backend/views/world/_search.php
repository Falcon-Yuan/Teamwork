<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WorldSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="world-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rank_by_gold') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'gold_medal') ?>

    <?= $form->field($model, 'silver_medal') ?>

    <?= $form->field($model, 'bronze_medal') ?>

    <?php // echo $form->field($model, 'medal_total') ?>

    <?php // echo $form->field($model, 'rank_by_medal') ?>

    <?php // echo $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

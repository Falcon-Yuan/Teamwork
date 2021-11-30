<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tokyomedal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tokyomedal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rank_by_gold')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gold_medal')->textInput() ?>

    <?= $form->field($model, 'silver_medal')->textInput() ?>

    <?= $form->field($model, 'bronze_medal')->textInput() ?>

    <?= $form->field($model, 'medal_total')->textInput() ?>

    <?= $form->field($model, 'rank_by_medal')->textInput() ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

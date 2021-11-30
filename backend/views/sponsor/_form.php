<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sponsor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sponsor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '公司名称')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '赞助类别')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '企业简介')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '与国际奥委会交集')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
namespace common\models;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use Yii;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<head>
<style type="text/css">
.login-page {
background: url("../img/back.jfif") no-repeat center center fixed;
background-size: cover; 
}
</style>
</head>   
<body>  
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b><font color="green">后台登录</font></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><font color ="grey">登录管理前台页面</font></p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>

<!--<?php echo Yii::$app->security->generatePasswordHash('123456'); ?> -->
        <?php ActiveForm::end(); ?>

        <div class="social-auth-links text-center">
            <p>友情链接</p>
            <a href="https://www.nankai.edu.cn/" class="btn btn-block btn-social btn-facebook btn-flat"> 南开大学官网</a>
            <a href="https://space.bilibili.com/703007996?from=search&seid=2269442214593636996&spm_id_from=333.337.0.0" class="btn btn-block btn-social btn-google-plus btn-flat"> 神秘跳转</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="../../../frontend/web" class="text-center">返回前台</a>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
</body>
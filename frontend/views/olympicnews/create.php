<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Olympicnews */

$this->title = 'Create Olympicnews';
$this->params['breadcrumbs'][] = ['label' => 'Olympicnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="olympicnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

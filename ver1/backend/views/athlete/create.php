<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Athlete */

$this->title = 'Create Athlete';
$this->params['breadcrumbs'][] = ['label' => 'Athletes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="athlete-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

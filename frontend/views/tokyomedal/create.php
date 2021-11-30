<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tokyomedal */

$this->title = 'Create Tokyomedal';
$this->params['breadcrumbs'][] = ['label' => 'Tokyomedals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokyomedal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

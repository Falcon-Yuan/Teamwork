<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Olympicsponsor */

$this->title = 'Create Olympicsponsor';
$this->params['breadcrumbs'][] = ['label' => 'Olympicsponsors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="olympicsponsor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

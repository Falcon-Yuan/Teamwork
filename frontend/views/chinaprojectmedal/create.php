<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chinaprojectmedal */

$this->title = 'Create Chinaprojectmedal';
$this->params['breadcrumbs'][] = ['label' => 'Chinaprojectmedals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chinaprojectmedal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

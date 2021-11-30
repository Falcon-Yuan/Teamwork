<?php

/**
 * Team:NKNextTeam
 * Coding by wanghanwei 1811430, 20211127
 * This is the athlete view
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AthleteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Athletes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="athlete-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Athlete', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'athlete',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

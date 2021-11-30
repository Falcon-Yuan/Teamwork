<?php
/**
 * Team:NKNextTeam
 * Coding by wanghanwei 1811430, 20211127
 * This is the world medal view
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WorldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Worlds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="world-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create World', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rank_by_gold',
            'country',
            'gold_medal',
            'silver_medal',
            'bronze_medal',
            //'medal_total',
            //'rank_by_medal',
            //'country_code',
            //'country_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

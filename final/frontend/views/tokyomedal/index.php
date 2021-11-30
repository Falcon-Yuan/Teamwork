<?php
/**
 * Team:NKNextTeam
 * Coding by yangxiaoran 1811701, 20211127
 * This is the medal view
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TokyomedalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tokyomedals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokyomedal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokyomedal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
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

      //      ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

<?php
/**
 * Team:NKNextTeam
 * Coding by wanghanwei 1811430, 20211127
 * This is the sponsor view
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SponsorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sponsor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '公司名称',
            '赞助类别',
            '企业简介',
            '与国际奥委会交集',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

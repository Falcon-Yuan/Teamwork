<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '&#x9996;&#x9875;',//��ҳ�ı���
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    /*$menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];*/
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="blank" style="margin-top: 50px"></div>
    <div class="main-agile">
      <!-- header -->
      <div class="header-w3layouts"> 
        <!-- Navigation -->
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <h1><a class="navbar-brand" href="#page-top"><span>O</span>lympic</a></h1>
          </div> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <li class=""><a href="index.php">返回主页</a></li>
              <li class=""><a href="index.php?r=worldmap/page">世界金牌榜</a></li>
              <li class=""><a href="index.php?r=athlete/index">运动员</a></li>
              <li class=""><a href="index.php?r=olympicnews/index">奥运新闻</a></li>
              <li class=""><a href="index.php?r=chinaprojectmedal/index">中国项目金牌榜</a></li>
              <li class=""><a href="index.php?r=olympicsponsor/index">奥运合作伙伴</a></li>
            </ul>
          </div>
        </nav>  
      </div>	
      <!-- //header -->
      <!-- banner -->
      <div class="w3l-banner-2" style="background-image:url(images/fire.jpeg)"> 
        <h6>Tokyo 2020</h6>
      </div>	
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; NKNextTeam <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

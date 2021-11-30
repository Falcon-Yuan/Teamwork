<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\base\widget;
use yii\helpers\Url;
use frontend\widgets\chat\ChatWidget;

AppAsset::register($this);
?>
<?php $this->beginPage()  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>东京奥运</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script src='js/jquery.js'></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/jquery.throttle.js"></script>
  <script src="js/jquery.classycountdown.js"></script>
  <script src="js/index.js"></script>
  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
  <link rel="stylesheet" href="css/lightbox.css"> <!-- Gallery-CSS -->
  <!-- //css files -->
  <!-- online-fonts -->
  <link href="http://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
  <!-- //online-fonts -->
  <script>
      $(function () {
          //说一说
          $(".j-wish").click(function(){
              var url = $(this).attr("data-url");
              var content = $("textarea").val(); //获取文本框内容

              if(content == ''){
                  $(".field-wish-content").addClass("has-error");
                  return false;
              }
              $.ajax(url,{
                  type:"post",
                  dataType:"json",
                  data:{ content:content },
                  success:function(data){
                      if(data.status){
                          location.reload();
                      }else{
                          alert(data.msg);
                      }
                  },
              })
          })
      });
  </script>
</head>

<body>
  <div class="main-agile">
    <!-- Header -->
    <div class="header-w3layouts">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Olympic</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="#page-top"><span>O</span>lympic</a></h1>
        </div> 
        <!-- Top Nav -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
              <?php if (Yii::$app->user->isGuest) {echo  
              '<li>
              <a href="#page-top">首页</a>
              </li>
              <li>
              <a href="index.php?r=site/signup">注册</a>
              </li>
              <li>
              <a href="index.php?r=site/login">登录</a>
              </li>';}
              else{echo
              '<li>
              <a href="javascript:void(0);" onclick="document.getElementById(\'myform\').submit();">退出登录</a>
              <form id="myform"  method= "post" action="index.php?r=site/logout">
              </form>
              </li>';} ?>
              <li>
                  <a href="#comment">奥运留言板</a>
              </li>
              <li>
                  <a href="index.php?r=worldmap/page">奥运时刻</a>
              </li>
              <li>
                  <a href="../../backend/web">登录后台</a>
              </li>
              <li>
                  <a href="#team">关于团队</a>
              </li>
          </ul>
        </div>
        <!-- /Top Nav -->
      </nav>
    </div>
    <!-- //Header -->
    <!-- banner -->
    <div id="home" class="w3ls-banner"> 
      <!-- banner-text -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides callbacks callbacks1" id="slider4">
            <li>
              <div class="w3layouts-banner-top">
                <div class="container">
                  <div class="agileits-banner-info">
                    <div class="posi-w3l">
                      <p>Welcome to Tokyo2020</p>
                    </div>
                    <h3>United by Emotion</h3>
                  </div>	
                </div>
              </div>
            </li>
            <li>
              <div class="w3layouts-banner-top t2">
                <div class="container">
                  <div class="agileits-banner-info">
                    <div class="posi-w3l">
                      <p>Welcome to Tokyo2020</p>
                    </div>
                    <h3>感动让我们成为一体</h3>
                  </div>	
                </div>
              </div>
            </li>
            <li>
              <div class="w3layouts-banner-top t3">
                <div class="container">
                  <div class="agileits-banner-info">
                    <div class="posi-w3l">
                      <p>Welcome to Tokyo2020</p>
                    </div>
                    <h3>超越竞技极限</h3>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
        <!--banner Slider starts Here-->
      </div>
    </div>
    <!-- //banner --> 
  </div>
  <!-- welcome -->
  <div class="about w3layouts-agileinfo" id="about">
    <div class="container">
      <h3 class="agile-title">About</h3>
      <div class="about-top w3ls-agile">
        <div class="col-md-6 red">
          <img class="img-responsive" src="images/mascot.jpg" alt="">
        </div>
        <div class="col-md-6 come">
          <div class="about-wel">
            <h5>关于奥运会</h5>
            <p>2020年东京奥运会是全世界在新冠疫情爆发后首次聚在一起举办的一届奥运会。赛会期间展现出来的团结是前所未有的。本届奥运会关注的焦点也非常纯粹——成为运动员和体育运动共同的节日。这份团结对于2020年东京奥运会在经历史无前例的延期一年后，最终能够成功举办至关重要。作为所有奥运会参与者的安全参赛指南，《疫情应对措施手册》发挥了尤为重要的作用。针对不同人群制定的不同版本的《疫情应对措施手册》为大型体育赛事的举办定下了新标准，确保了从运动员到媒体人员，每个人都能安全、安心的参加奥运会。</p>
              <ul>
                <li><i class="glyphicon glyphicon-ok"></i>体育和团结</li>
                <li><i class="glyphicon glyphicon-ok"></i>年轻、城市运动、性别平等</li>
                <li><i class="glyphicon glyphicon-ok"></i>可持续发展和奥运遗产</li>
              </ul>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //welcome -->
  <!-- gallery -->
  <div class="gallery">
    <h3 class="agile-title">gallery</h3>
    <div class="container">
      <div class="gallery-grids">
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g1.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g2.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g3.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>		
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g4.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g5.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g6.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>		
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g7.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g7.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g8.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g8.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>	
              </a>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
          <div class="grid">
            <figure class="effect-apollo">
              <a class="example-image-link" href="images/g9.jpg" data-lightbox="example-set" data-title="">
                <img src="images/g9.jpg" alt="" />
                <figcaption>
                  <p>Tokyo 2020</p>
                </figcaption>		
              </a>
            </figure>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //gallery -->
  <!-- team -->
  <div class="team" id="team">
    <h3 class="agile-title">Our Team</h3>
    <div class="agile_team_grids">
      <div class="col-md-2 agile_team_grid" style="margin-left:250px">
        <div class="ih-item circle effect1">
          <div class="spinner"></div>
          <div class="img"><img src="images/ywf.jpg" alt=" " class="img-responsive" /></div>
          <div class="info">
            <div class="info-back">
              <h4>Team Leader</h4>
              <p>Tokyo 2020</p>
            </div>
          </div>
        </div>
        <h4>苑伟锋</h4>
        <p>1911509 2019级计算机与科学技术专业</p>
        <div class="social-icons team-icons">
          <ul>
            <li><a href="#" class="fa fa-facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter"> </a></li>
            <li><a href="#" class="fa fa-linkedin"> </a></li>
          </ul>
        </div> 
      </div>
      <div class="col-md-2 agile_team_grid">
        <div class="ih-item circle effect1">
          <div class="spinner"></div>
          <div class="img"><img src="images/sxr.jpg" alt=" " class="img-responsive" /></div>
          <div class="info">
            <div class="info-back">
              <h4>Team Member</h4>
              <p>Tokyo 2020</p>
            </div>
          </div>
        </div>
        <h4>孙雪柔</h4>
        <p>1911567 2019级计算机与科学技术专业</p>
        <div class="social-icons team-icons">
          <ul>
            <li><a href="#" class="fa fa-facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter"> </a></li>
            <li><a href="#" class="fa fa-linkedin"> </a></li>
          </ul>
        </div> 
      </div>
      <div class="col-md-2 agile_team_grid t3">
        <div class="ih-item circle effect1">
          <div class="spinner"></div>
          <div class="img"><img src="images/whw.jpg" alt=" " class="img-responsive" /></div>
          <div class="info">
            <div class="info-back">
              <h4>Team Member</h4>
              <p>Tokyo 2020</p>
            </div>
          </div>
        </div>
        <h4>王瀚威</h4>
        <p>1811430 18级信息安全与法学专业</p>
        <div class="social-icons team-icons">
          <ul>
            <li><a href="#" class="fa fa-facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter"> </a></li>
            <li><a href="#" class="fa fa-linkedin"> </a></li>
          </ul>
        </div> 
      </div>
      <div class="col-md-2 agile_team_grid t4">
        <div class="ih-item circle effect1">
          <div class="spinner"></div>
          <div class="img"><img src="images/yxr.jpg" alt=" " class="img-responsive" /></div>
          <div class="info">
            <div class="info-back">
              <h4>Team Member</h4>
              <p>Tokyo 2020</p>
            </div>
          </div>
        </div>
        <h4>杨潇然</h4>
        <p>1811701 18级英语/计算机科学与技术专业</p>
        <div class="social-icons team-icons">
          <ul>
            <li><a href="#" class="fa fa-facebook"> </a></li>
            <li><a href="#" class="fa fa-twitter"> </a></li>
            <li><a href="#" class="fa fa-linkedin"> </a></li>
          </ul>
        </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>
  </div>
  <!-- //team -->
  <!-- message -->
  <section class="index-news commit_title" id="comment" style="padding-bottom: 20px; padding-top: 30px;">
      <h3 class="agile-title">Message</h3>
      <div class="container" style="margin-left: 260px;">
        <header class="text-center">
        </header>
          <div class="body-content">
              <div class="col-lg-9">
                  <div class="timeline" style="margin-bottom:0px;">
                      <div class="timeline-left" id="liuyan-div">
                          <?=ChatWidget::widget()?>
                      </div> 
                  </div>
                  <div class="col-lg-3" style="margin-left:40px;">
                      <span class="input-group-btn">
                          <button type="button" data-url="<?=Url::to(['site/add-wish'])?>" 
                          class='btn btn-success btn-wish j-wish'>留言</button>
                      </span>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- //message -->
  <!-- Footer -->
  <div class="logo-footer">
    <div class="container">
      <div class="col-md-3 agileinfo_footer_grid">
        <h2>About Us</h2>
        <p>Duis aute irure dolor in esse cillum dolore eu 
          fugiat nulla pariatur. <span>Excepteur sint proident 
          sunt in culpa qui officia anim id est laborum.</span></p>
        <div class="w3ls-social-icons-2">
          <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
        </div>
      </div>
      <div class="col-md-3 agileinfo_footer_grid f3">
        <h4>Navigation</h4>					
        <div class="nav-w3-l">
          <ul>
            <li><a href="#page-top" >首页</a></li>
            <li><a href="#comment" >奥运留言板</a></li>
            <li><a href="index.php?r=worldmap/page" >奥运时刻</a></li>
            <li><a href="../../backend/web" >登录后台</a></li>
            <li><a href="#team" >关于团队</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 agileinfo_footer_grid f2">
        <h4>Information</h4>
        <div class="w3-agileits_mail_grid_left">
          <div class="w3-agileits_mail_grid_left1">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          </div>
          <div class="w3-agileits_mail_grid_left2">
            <h3>Mail Us</h3>
            <a href="mailto:info@example.com">mail@example.com</a>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="w3-agileits_mail_grid_left">
          <div class="w3-agileits_mail_grid_left1">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          </div>
          <div class="w3-agileits_mail_grid_left2">
            <h3>Address</h3>
            <p>5280 Wetzel Lane</p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="w3-agileits_mail_grid_left">
          <div class="w3-agileits_mail_grid_left1">
            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
          </div>
          <div class="w3-agileits_mail_grid_left2">
            <h3>Phone</h3>
            <p>+5244 125 625</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-3 agileinfo_footer_grid f1">
        <h4>Instagram Posts</h4>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f5.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="agileinfo_footer_grid1">
          <a href="#"><img src="images/f6.jpg" alt=" " class="img-responsive"></a>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      <div class="w3agile_footer_copy">
        <p>Copyright &copy; 2021. NKNextTeam All rights reserved.</p>
      </div>
    </div>
  </div>
  <!-- //Footer -->

  <!-- js-scripts -->			
  <!-- js-files -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
  <!-- //js-files -->
  <!-- smooth scrolling -->
  <script src="js/SmoothScroll.min.js"></script>
  <!-- //smooth scrolling -->
  <!-- //gallery -->
  <script src="js/lightbox-plus-jquery.min.js"> </script>
  <!-- //gallery -->
  <!-- Baneer-js -->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
      auto: true,
      pager:true,
      nav:false,
      speed: 500,
      namespace: "callbacks",
      before: function () {
        $('.events').append("<li>before event fired.</li>");
      },
      after: function () {
        $('.events').append("<li>after event fired.</li>");
      }
      });

    });
  </script>
  <!-- //Baneer-js -->

  <!-- start-smooth-scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>	
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
          event.preventDefault();
      
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
  </script>
  <!-- //end-smooth-scrolling -->	
  <!-- smooth-scrolling-of-move-up -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <!-- //smooth-scrolling-of-move-up -->  
  <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
  <!-- //js-scripts -->
<?php $this->endBody() ?>
</body>

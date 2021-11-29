<?php

use yii\helpers\Html;
?>

<head>
  <!-- BEGIN: Title -->
  <title>奥运时刻</title>
  <!-- END: Title -->

  <!-- BEGIN: Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- END: Meta -->
  
  <!-- BEGIN: Favicon -->
  <!-- END: Favicon -->

  <!-- BEGIN: Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="fonts/lineicons/LineIcons.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/jquery.lavalamp.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/visualstyle.css">
  <!-- END: Stylesheets -->

  <link href="css/tendency/index.css" rel="stylesheet">

  <script type="text/javascript" src="https://assets.pyecharts.org/assets/echarts.min.js"></script>
  <script type="text/javascript" src="https://assets.pyecharts.org/assets/maps/world.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>

  <!--
  <script src="../Js/jquery.min.js"></script>
  <script src="../Js/echarts.min.js"></script>
  <script src="../Js/Date.prototype.js"></script>
  <script src="../Js/jquery.color.min.js"></script>
  <script src="../Js/jquery.animateNumber.min.js"></script>
  <script src="../Js/jquery.tooltipster.min.js"></script> 
  -->
  <script src="js/tendency/Date.prototype.js"></script>
  <script src="js/tendency/layer.js"></script>
  <style> </style>
</head>

<body>
  
  <!-- BEGIN: .site-wrap -->
  <div class="site-wrap">
  
    <!-- BEGIN: #site-header -->  
    <!-- 
      Add class '.position-relative' to display it as stack.
      Add '.navbar-light' to make the text dark or black.
    -->
    <header id="site-header" class="position-relative">

      <!-- Add '.navbar_dark' class if you want the color of the text to -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

          <!-- BEGIN: .navbar-brand -->
          <a class="navbar-brand" href="index.php">
                <a class="nav-link active" href="index.php" style="color:grey; font-size: 1.5rem">返回首页</a>
          </a>
          <!-- END: .navbar-brand -->

          <!-- BEGIN: .navbar-toggler -->
          <a href="#" class="burger-toggle-menu js-burger-toggle-menu ml-auto py-4" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </a>
          <!-- END: .navbar-toggler -->

          <!-- BEGIN: #main-nav -->
          <div class="collapse navbar-collapse" id="main-nav">

            <ul class="navbar-nav ml-auto">

              <li class="nav-item active">
                <a class="nav-link" href="index.php?r=worldmap/page">世界金牌榜</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="index.php?r=athlete/index">运动员</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="index.php?r=olympicnews/index">奥运新闻</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?r=chinaprojectmedal/index">中国项目金牌榜</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?r=olympicsponsor/index">奥运合作伙伴</a>
              </li>
            </ul>

          </div>
          <!-- END: #main-nav -->

        </div>
      </nav>
    </header>
    <!-- END: #site-header -->

    <!-- BEGIN: .cover -->
    <div class="page-heading-85912" style="background-image: url('images/japan.jpg')">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-7">
            <h1 class="mb-0 heading text-white"><font color="#FF0000">世界金牌榜</font> </h1>
            <p class="mb-0 text-white"></p>
          </div>
        </div>
      </div>
    </div>
    <!--worldmap-->
    <div id="container" class="chart-container" style="width:90%; height:90%;"></div>
    <script>
    var mapdatatool=[];
        var chart_container = echarts.init(
            document.getElementById('container'), 'white', {renderer: 'canvas'});
        // var option代表定义一个名为option的变量，后面花括号里的代表我们需要作图的参数设置
        var option = {
        "series": [
          {
            // 图标类型为 地图
            "type": "map",
            "name": "test",
            "label": {
                "show": false,
                "position": "top",
                "margin": 8
            },
            "mapType": "world",  // 地图类型为 世界地图
            "nameMap":{
              Afghanistan: '阿富汗',
              Singapore: '新加坡',
              Angola: '安哥拉',
              Albania: '阿尔巴尼亚',
              'United Arab Emirates': '阿联酋',
              Argentina: '阿根廷',
              Armenia: '亚美尼亚',
              'French Southern and Antarctic Lands':
                  '法属南半球和南极领地',
              Australia: '澳大利亚',
              Austria: '奥地利',
              Azerbaijan: '阿塞拜疆',
              Burundi: '布隆迪',
              Belgium: '比利时',
              Benin: '贝宁',
              'Burkina Faso': '布基纳法索',
              Bangladesh: '孟加拉国',
              Bulgaria: '保加利亚',
              'The Bahamas': '巴哈马',
              'Bosnia and Herzegovina': '波斯尼亚和黑塞哥维那',
              Belarus: '白俄罗斯',
              Belize: '伯利兹',
              Bermuda: '百慕大',
              Bolivia: '玻利维亚',
              Brazil: '巴西',
              Brunei: '文莱',
              Bhutan: '不丹',
              Botswana: '博茨瓦纳',
              'Central African Republic': '中非共和国',
              Canada: '加拿大',
              Switzerland: '瑞士',
              Chile: '智利',
              China: '中国',
              'Ivory Coast': '象牙海岸',
              Cameroon: '喀麦隆',
              'Democratic Republic of the Congo': '刚果民主共和国',
              'Republic of the Congo': '刚果共和国',
              Colombia: '哥伦比亚',
              'Costa Rica': '哥斯达黎加',
              Cuba: '古巴',
              'Northern Cyprus': '北塞浦路斯',
              Cyprus: '塞浦路斯',
              'Czech Republic': '捷克共和国',
              Germany: '德国',
              Djibouti: '吉布提',
              Denmark: '丹麦',
              'Dominican Republic': '多明尼加共和国',
              Algeria: '阿尔及利亚',
              Ecuador: '厄瓜多尔',
              Egypt: '埃及',
              Eritrea: '厄立特里亚',
              Spain: '西班牙',
              Estonia: '爱沙尼亚',
              Ethiopia: '埃塞俄比亚',
              Finland: '芬兰',
              Fiji: '斐',
              'Falkland Islands': '福克兰群岛',
              France: '法国',
              Gabon: '加蓬',
              'United Kingdom': '英国',
              Georgia: '格鲁吉亚',
              Ghana: '加纳',
              Guinea: '几内亚',
              Gambia: '冈比亚',
              'Guinea Bissau': '几内亚比绍',
              Greece: '希腊',
              Greenland: '格陵兰',
              Guatemala: '危地马拉',
              'French Guiana': '法属圭亚那',
              Guyana: '圭亚那',
              Honduras: '洪都拉斯',
              Croatia: '克罗地亚',
              Haiti: '海地',
              Hungary: '匈牙利',
              Indonesia: '印度尼西亚',
              India: '印度',
              Ireland: '爱尔兰',
              Iran: '伊朗',
              Iraq: '伊拉克',
              Iceland: '冰岛',
              Israel: '以色列',
              Italy: '意大利',
              Jamaica: '牙买加',
              Jordan: '约旦',
              Japan: '日本',
              Kazakhstan: '哈萨克斯坦',
              Kenya: '肯尼亚',
              Kyrgyzstan: '吉尔吉斯斯坦',
              Cambodia: '柬埔寨',
              Kosovo: '科索沃',
              Kuwait: '科威特',
              Laos: '老挝',
              Lebanon: '黎巴嫩',
              Liberia: '利比里亚',
              Libya: '利比亚',
              'Sri Lanka': '斯里兰卡',
              Lesotho: '莱索托',
              Lithuania: '立陶宛',
              Luxembourg: '卢森堡',
              Latvia: '拉脱维亚',
              Morocco: '摩洛哥',
              Moldova: '摩尔多瓦',
              Madagascar: '马达加斯加',
              Mexico: '墨西哥',
              Macedonia: '马其顿',
              Mali: '马里',
              Myanmar: '缅甸',
              Montenegro: '黑山',
              Mongolia: '蒙古',
              Mozambique: '莫桑比克',
              Mauritania: '毛里塔尼亚',
              Malawi: '马拉维',
              Malaysia: '马来西亚',
              Namibia: '纳米比亚',
              'New Caledonia': '新喀里多尼亚',
              Niger: '尼日尔',
              Nigeria: '尼日利亚',
              Nicaragua: '尼加拉瓜',
              Netherlands: '荷兰',
              Norway: '挪威',
              Nepal: '尼泊尔',
              'New Zealand': '新西兰',
              Oman: '阿曼',
              Pakistan: '巴基斯坦',
              Panama: '巴拿马',
              Peru: '秘鲁',
              Philippines: '菲律宾',
              'Papua New Guinea': '巴布亚新几内亚',
              Poland: '波兰',
              'Puerto Rico': '波多黎各',
              'North Korea': '北朝鲜',
              Portugal: '葡萄牙',
              Paraguay: '巴拉圭',
              Qatar: '卡塔尔',
              Romania: '罗马尼亚',
              Russia: '俄罗斯',
              Rwanda: '卢旺达',
              'Western Sahara': '西撒哈拉',
              'Saudi Arabia': '沙特阿拉伯',
              Sudan: '苏丹',
              'South Sudan': '南苏丹',
              Senegal: '塞内加尔',
              'Solomon Islands': '所罗门群岛',
              'Sierra Leone': '塞拉利昂',
              'El Salvador': '萨尔瓦多',
              Somaliland: '索马里兰',
              Somalia: '索马里',
              'Republic of Serbia': '塞尔维亚',
              Suriname: '苏里南',
              Slovakia: '斯洛伐克',
              Slovenia: '斯洛文尼亚',
              Sweden: '瑞典',
              Swaziland: '斯威士兰',
              Syria: '叙利亚',
              Chad: '乍得',
              Togo: '多哥',
              Thailand: '泰国',
              Tajikistan: '塔吉克斯坦',
              Turkmenistan: '土库曼斯坦',
              'East Timor': '东帝汶',
              'Trinidad and Tobago': '特里尼达和多巴哥',
              Tunisia: '突尼斯',
              Turkey: '土耳其',
              'United Republic of Tanzania': '坦桑尼亚',
              Uganda: '乌干达',
              Ukraine: '乌克兰',
              Uruguay: '乌拉圭',
              'United States': '美国',
              Uzbekistan: '乌兹别克斯坦',
              Venezuela: '委内瑞拉',
              Vietnam: '越南',
              Vanuatu: '瓦努阿图',
              'West Bank': '西岸',
              Yemen: '也门',
              'South Africa': '南非',
              Zambia: '赞比亚',
              Korea: '韩国',
              Tanzania: '坦桑尼亚',
              Zimbabwe: '津巴布韦',
              Congo: '刚果',
              'Central African Rep.': '中非',
              Serbia: '塞尔维亚',
              'Bosnia and Herz.': '波黑',
              'Czech Rep.': '捷克',
              'W. Sahara': '西撒哈拉',
              'Lao PDR': '老挝',
              'Dem.Rep.Korea': '朝鲜',
              'Falkland Is.': '福克兰群岛',
              'Timor-Leste': '东帝汶',
              'Solomon Is.': '所罗门群岛',
              Palestine: '巴勒斯坦',
              'N. Cyprus': '北塞浦路斯',
              Aland: '奥兰群岛',
              'Fr. S. Antarctic Lands': '法属南半球和南极陆地',
              Mauritius: '毛里求斯',
              Comoros: '科摩罗',
              'Eq. Guinea': '赤道几内亚',
              'Guinea-Bissau': '几内亚比绍',
              'Dominican Rep.': '多米尼加',
              'Saint Lucia': '圣卢西亚',
              Dominica: '多米尼克',
              'Antigua and Barb.': '安提瓜和巴布达',
              'U.S. Virgin Is.': '美国原始岛屿',
              Montserrat: '蒙塞拉特',
              Grenada: '格林纳达',
              Barbados: '巴巴多斯',
              Samoa: '萨摩亚',
              Bahamas: '巴哈马',
              'Cayman Is.': '开曼群岛',
              'Faeroe Is.': '法罗群岛',
              'IsIe of Man': '马恩岛',
              Malta: '马耳他共和国',
              Jersey: '泽西',
              'Cape Verde': '佛得角共和国',
              'Turks and Caicos Is.': '特克斯和凯科斯群岛',
              'St. Vin. and Gren.': '圣文森特和格林纳丁斯'
            },
            "data": [],
            "roam": true,
            "zoom": 1,
            // 去除各个国家上的小红点
            "showLegendSymbol": false, 
          }
        ],
        // 鼠标悬浮，单击产生的效果（在网页上可以动态显示）
        "tooltip": {
          "show": true,
          "trigger": "item",
          "triggerOn": "mousemove|click",
          "axisPointer": {
              "type": "line"
          },
          "textStyle": {
              "fontSize": 18
          },
          "borderWidth": 2,
          formatter: function (params){
            var res=params.name;
            for(var i=0;i<mapdatatool.length;i++){
              if(params.name==mapdatatool[i].name){
                res+='</br>' +JSON.stringify(mapdatatool[i].value);
                break;
              }       
            }
            return res;
          }
        }
      };
$.getJSON("index.php?r=tokyomedal/data", function (data) {
      var mapData=[];
       for (var i = 0; i < data.length; i++) {
        var geo =[];
        mapData.push({
            "name": data[i]["country"],
            "value": geo.concat("金牌数",data[i]["gold_medal"],"银牌数",data[i]["silver_medal"],"铜牌数",data[i]["bronze_medal"],
                                "金牌榜排名",data[i]["rank_by_gold"])
        });
       }
      mapdatatool=mapData;
});
chart_container.setOption(option);
    </script>


  </div>
  <!-- END: .site-wrap -->




  <!-- Loader -->
  <div id="site-overlayer"></div>
  <div class="site-loader-wrap">
    <div class="site-loader"></div>
  </div>

  <!-- BEGIN: JavaScripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.lavalamp.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/main.js"></script>
  <!-- END: JavaScripts -->
 
</body>
<?php

/* @var $this yii\web\View */
//require ('waf.php');
$this->title = '管理后台';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>后台登陆成功！</h1>

         <p class="lead">Login success！.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">使用手册</a></p>
    </div>

<!doctype html>  
<html>  
<head>  
<meta charset="utf-8">  
<title>show_time</title>  
<style>  
body {  
    padding-top: 40px;  
}  
#main {  
    margin: auto;  
    text-align: center;  
    width: 300px;  
    height: 100px;   
    background-color: #0CC;  
}  
#show_time0,#show_time {  
width:300px;
height:150px;
    color: #FFF;  
}  
</style>  
</head>  
  
<body>  
<div id="main">  
<div id="show_time0" style="font-size:140%">
<script>
 setInterval("show_time0.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);  
</script>
 
 
</div>

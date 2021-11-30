<?php
/**
 * Team:
 * Coding by whw 1811430,20211128
 * This is the person view
 */
use yii\helpers\Html;
?>

<?PHP echo "<p style='color:#ff0000; font-size:16px;'>服务器信息：".$_SERVER ['SERVER_SOFTWARE']."</p>";
echo "</br>";
//echo PHP_OS;
echo "<p style='color:#ff0000; font-size:16px;'>操作系统：".PHP_OS."</p>";
echo "<br>";
//echo PHP_VERSION;
echo "<p style='color:#ff0000; font-size:16px;'>PHP版本：".PHP_VERSION."</p>";
echo "</br>";
//date_default_timezone_set (PRC); echo date("Y-m-d G:i:s");
echo "<p style='color:#ff0000; font-size:16px;'>系统目录：".$_SERVER['SystemRoot']."</p>";
echo "</br>";
?>

<?php
/**
 * Team:
 * Coding by whw 1811430,
 */
use yii\helpers\Html;
?>

<?PHP 
function dataBackup(){
   $doc_root=$_SERVER['DOCUMENT_ROOT'];
   $file_path_name=$doc_root.'/sqlbackup';
   $name='backup_'.date('YmdHis').".sql";
   if(!file_exists($file_path_name)){mkdir($file_path_name,0777);}
   $mysqldump_url='G:\phpstudy\PHPTutorial\MySQL\bin\mysqldump.exe';//mysqldump.exe的绝对路径，安装mysql自带的有，可以搜索一下路径
   $host='127.0.0.1';//数据库所在的服务器地址
   $User='root';//数据库用户名
   $Password='tmp1';//数据库密码
   $databaseName='kuer';//数据库名
   $process=$mysqldump_url." -h".$host." -u".$User."  -p".$Password."  ".$databaseName." >".$file_path_name."/".$name;
   $er=system($process);//system()执行外部程序，并且显示输出
   if($er!==false){
      echo json_encode('success!');
	  echo "<script>alert('数据库已备份，路径为.$file_path_name')</script>";
   }else{
      echo json_encode('error!');
   }
}

echo "   ";

?>
<a href="../../views//homework/dbbak.php"  ><span style="font-size:24px;">备份数据库</span><br /></a>
<html>
<head>
</head>
<body>

</body>
</html>

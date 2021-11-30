<?php

function dataBackup(){
   $doc_root=$_SERVER['DOCUMENT_ROOT'];
   $file_path_name=$doc_root.'/sqlbackup';
   $name='backup_'.date('YmdHis').".sql";
   if(!file_exists($file_path_name)){mkdir($file_path_name,0777);}
   $mysqldump_url='C:\xampp1\mysql\bin\mysqldump.exe';//mysqldump.exe的绝对路径，安装mysql自带的有，可以搜索一下路径
   $host='127.0.0.1';//数据库所在的服务器地址
   $User='root';//数据库用户名
   $Password='';//数据库密码
   $databaseName='web_database';//数据库名
   $process=$mysqldump_url." -h".$host." -u".$User."  -p".$Password."  ".$databaseName." >".$file_path_name."/".$name;
   echo "<script>alert('数据库备份路径为：.$file_path_name')</script>";
   $er=system($process);//system()执行外部程序，并且显示输出
   if($er!==false){
      echo json_encode('success!');
	     echo "<script>alert('数据库备份成功，路径为：.$file_path_name')</script>";
   }else{
      echo json_encode('error!');
   }
}

dataBackup();
?>
@@echo off

set errorlevel=0

set path_home_mysql="C:\\xampp\\mysql"
C:\xampp1\mysql
set path_bin_mysql="C:\\xampp\\mysql\\bin\\"

echo %path_bin_mysql%

set database_address=127.0.0.1

set database_mysql=web_database

set user_mysql=root

set password_mysql=123456

set file_path=C:\\xampp\\htdocs\\coursework\\data\\install.sql

%path_bin_mysql%mysql.exe -h%database_address% -u%user_mysql% -p%password_mysql% create database %database_mysql%

%path_bin_mysql%mysqldump.exe -h%database_address% -u%user_mysql% -p%password_mysql% %database_mysql% < %file_path%


set DST_DIR=C:\xampp\htdocs\coursework
for /r . %%a in (*) do if exist "%%a" copy %DST_DIR% "%%a" .
echo end backup
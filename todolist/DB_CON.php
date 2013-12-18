<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$con_error = 'connection error, ';
$db_error = 'couldnt connect to database';

$mysql_db = 'todo_list';

if (@mysql_connect($mysql_host, $mysql_user, $mysql_password)){
    if (@mysql_select_db ($mysql_db)){
	
	
	}else
	echo $db_error;
}else
echo $con_error;
?>

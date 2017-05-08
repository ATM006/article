<?php
require_once('config.php');
//连接数据库
if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))){
	echo mysql_error();
}else{
	//echo  "连接成功";
}

//选择数据库
if(!mysql_select_db('article',$con)){
	//echo mysql_error();
}
//选择字符集
mysql_query('set names utf-8');

?>

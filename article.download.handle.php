<?php
require_once("connect.php");
$id = intval($_GET['id']);
$sql = "select * from article where id=$id";
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
	$row = mysql_fetch_assoc($query);
}else{
	echo "这篇文章不存在!";
	exit;
}

$filedata = $row['content'];
$fileName = $row['title']; //得到文件名
$author = $row['author'];

header("Content-type: text/html; charset=utf-8");
header("content-disposition:attachment;filename=".$fileName);
echo "$fileName\n";
echo "author: $author\n";
echo $filedata;

?>


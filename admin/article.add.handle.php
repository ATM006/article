<?php
require_once("../connect.php");
//把传递过来的信息入库,在入库前对所以信息校验
//print_r($_POST);

if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
	echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
}

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();

$insertsql = "insert into article(title,author,description,content,dateline) values ('$title','$author','$description','$content',$dateline)";
//echo $insertsql;

if(mysql_query($insertsql)){
	echo "<script>alert('文章提及成功');window.location.href='article.add.php'</script>";
}else{
	echo "<script>alert('提交失败');window.location.href='article.add.php'</script>";
}
?>

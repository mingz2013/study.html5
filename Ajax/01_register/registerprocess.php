<?php
	
	//这里两句话很重要,第一讲话告诉浏览器返回的数据是xml格式
	header("Content-Type: text/xml;charset=utf-8");
	//告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");

	//接收数据
	$username=$_GET['username'];
/*
registerPro.php关键码 POST：
$username=$_POST['username'];
*/

	if($username=="mingzz"){
		echo "用户名不可以用";//注意，这里数据是返回给请求的页面.
	}else{
		echo "用户名可以用";
	}

	
	
// 如果后面有这个问号和尖括号结尾，则是一个单独的文件
// 如果没有  则是 被别的文件 包含的，  也不会出错
?>	
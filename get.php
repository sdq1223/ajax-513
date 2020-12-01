<?php 
//设置字符集
header("content-type:text/html;charset=utf-8");
$user = $_GET['user'];
$pwd = $_GET['password'];
//输出
echo '用户名：'.$user.'|密码：'.$pwd.'登陆成功';
?>
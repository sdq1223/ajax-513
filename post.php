<?php 
//设置字符集
header("content-type:text/html;charset=utf-8");
$user = $_POST['user'];
$pwd = $_POST['password'];
//输出
echo '用户名：'.$user.'|密码：'.$pwd;
?>
<?php
//1.传入页码
$page = $_GET['p'];
/*2.根据页码取出数据：php->mysql处理*/
$host='localhost';
$username='root';
$password='123456';
$db='test1';
//连接数据库
$con= mysql_connect($host,$username,$password);
if(!$con){
    echo"数据库连接失败";
    exit;
}
//选择所要操作的数据库
mysql_select_db($db);
//设置数据库的编码格式
mysql_query("SET NAMES UTF8");
//编写sql 获取分页数据 SELECT * FROM 表名 LIMIT  起始位置， 显示条数
$sql = "SELEFT * FROM "
//3.显示数据 + 分页条


?>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);//定义错误级别
ini_set("display_errors",1);//修改PHP.ini里面的display_errors为on开启错误

$str="sssd";
echo"--{$str}我是爱你的<br>";//双引号可以解析变量
echo's s <br>';

$str1="abc";
$str2=$str1.$str;//PHP里面连接字符串用.
echo"<br>";//页面换行符
echo"$str2<br>";

$str3=" 123 ";
echo "--".trim($str3)."--"."<br>";//trim去掉字符串前后空格 或者 字符
echo "--".trim($str3," 3 ")."--"."<br>";
echo"--".trim($str3," ")."--"."<br>";//如果函数有第二个参数，去除的就是我们指定的参数，默认去除空格不起作用

$str4="Hello World";
echo trim($str4,"Hell")."<br>";
echo trim($str4,"rld")."<br>";//删除指定字符时前后空格不起作用

$str5="\\t Hello World";// \是转义字符，可以把特殊字符当成普通字符来输出
echo trim($str5)."<br>";

$str6="nihao\n Hello World";// \n是代码换行，<br>是页面换行
echo $str6."<br>";

$str7="\n Hello";
echo trim($str7)."<br>";
echo ltrim($str6,"ni")."<br>";

$str8=" nihao  ";
echo "--".ltrim($str8)."++"."<br>";//ltrim去除左边的空格
$str9="  nihao  ";
echo "--".rtrim($str9)."++"."<br>";//rtrim去除右边的空格

$str10="abc";
echo ucfirst($str10)."<br>";//把字符串首字母变为大写
$str11="hello world";
echo ucwords($str11)."<br>";//把单词的首字母转换为大写
$str12=  strtoupper($str11);//把字符串转换为大写
echo $str12."<br>";
echo strtolower($str11)."<br>";//把字符串转换为小写

echo"<div style=\"border:1px solid red\">$str12</div>";//如果想要在双引号里面嵌套一个双引号，需要加上转义字符\

$str13="Hello' @ \n \"World";
echo $str13."<br>";
echo addslashes($str13)."<br>";//把特殊字符自动加上\
echo stripslashes($str13)."<br>";//把\去掉
echo addcslashes($str13,"HW")."<br>";//逐词匹配

$str14=  addcslashes($str13,"HW");
echo stripcslashes($str14)."<br>";


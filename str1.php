<?php

$str="hello world";
$str1="智游培训";
$str2="中华人民共和国";
echo strlen($str);//获取字符串长度
echo"<br>";
echo strlen($str1);//UTF-8下面的中文是3个字节
echo"<br>";
echo mb_strlen($str);
echo"<br>";
echo mb_strlen($str1,"utf8");
echo"<br>";
echo substr($str,0,4);//substring 截取字符串 第二个参数是启示位置，第三个参数是长度
echo"<br>";
echo substr($str,2);//没有第三个参数的话 默认到最后一位
echo"<br>";
echo mb_substr($str2,2);//中文字符截取方式
echo"<br>";
echo strcmp("abc", "Abc");//前后对比 大则为1 反则为-1 相等为0
echo"<br>";
echo strcasecmp("abc","Abc");//不区分大小写进行比较
echo"<br>";
echo strnatcasecmp("abc10", "abc20");
echo"<br>";
echo strnatcmp("Abc10", "abc10");
echo"<br>";
echo strncmp("abc", "afc", 2);
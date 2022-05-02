<?php
$servername="localhost";
$sqlpwd="246102";
$sqlname="root";
$dbanme="devil-wzx";
$conn=new mysqli($servername,$sqlname,$sqlpwd,$dbanme)or die("链接数据库失败".mysql_error());
header('Content-Type: application/json');//加了这句话就后面不用再写解析JSON
?>
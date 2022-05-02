<?php
include('conn.php');  //导入conn.php
$sql = "select *from test";
$result = mysqli_query($conn, $sql);
$res = [];
while ($row = mysqli_fetch_assoc($result)) {
    //追加数据
    array_push($res, $row);
}

$res . header('Access-Control-Allow-Origin:*');
//加了这句话前端就不用解析代码了
echo json_encode($res);

$conn->close();
?>   




 <?php
include('conn.php');  //导入conn.php
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);
$res = [];
while($row = mysqli_fetch_array($result)) {
    //追加数据
    array_push($res, $row);
}

$res . header('Access-Control-Allow-Origin:*');
//加了这句话前端就不用解析代码了
if (!$res) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo json_encode($res);

$conn->close();
?>    

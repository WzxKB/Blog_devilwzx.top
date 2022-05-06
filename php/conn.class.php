<?php
require_once BASE_PATH . '/config.php';

class conn{
    public $conn;
    function __construct() {
        $this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,DB_CHARSET)or die("连接数据库失败");
    }

    function GetConn(){
        return $this->conn;
    }
}
?>
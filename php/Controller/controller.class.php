<?php

// 控制器的基类
require_once BASE_PATH . '/conn.class.php';

require_once BASE_PATH . '/Controller/blog.class.php';

class Controller
{
    public $conn;

    function __construct()
    {
        $this->conn = (new conn())->GetConn();
    }

}
?>





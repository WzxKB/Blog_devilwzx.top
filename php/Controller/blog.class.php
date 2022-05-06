<?php
class Blog extends Controller
{
    function __construct()
    {
        /*
         * 避免子类的构造函数覆盖父类的构造函数
         */
        parent::__construct();
        /*
         * 其它自定义操作
         */
    }
    
    function getBlogList($requestPayload)
    {
        $sql = "SELECT * FROM blog";
        $result = mysqli_query($this->conn, $sql);
        $res = [];
        while($row = mysqli_fetch_array($result)) {
            //追加数据
            array_push($res, $row);
        }
        
        $res . header('Access-Control-Allow-Origin:*');

        $data['status']=1;
        $data['message']='成功';
        $data['data']=$res;
        return $data;
    }

    

}

?>
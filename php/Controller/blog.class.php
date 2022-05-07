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
    
    //查询blog表
    function getBlogList($requestPayload)
    {
        $sql = "SELECT * FROM blog";
        $result = mysqli_query($this->conn, $sql);
        $res = [];
        while($row = mysqli_fetch_array($result)) {
            //追加数据
            array_push($res, $row);
        }
        $data['status']=1;
        $data['message']='查询成功';
        $data['data']=$res;
        return $data;
    }
    
    //给blg表插入数据
    function insertBlogList($requestPayload)
    {
        // $sql="INSERT INTO devilwzx_top.blog
        // (artTitle, artAuthor, artTags, artTime, artContent, artHtml)
        // VALUES($requestPayload.artTitle, $requestPayload.artAuthor, $requestPayload.artTags, $requestPayload.artTime, $requestPayload.artArtical.content, requestPayload,artArtical.html);
        // ";
        // $sql="INSERT INTO devilwzx_top.blog
        // (artTitle, artAuthor, artTags, artTime, artContent, artHtml)
        // VALUES('test2', 'trf', 'css,html', '2022-05-05', '人生', '嘿嘿嘿');
        // " ;
        // if(mysqli_query($this->conn, $sql)){
        //     $data['message']='插入成功';
        // };
        // $requestPayload;
        $data['status']=1;        
        $data['data']=$requestPayload['artArtical']['content'];
        return $data;
    }

}

?>
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
        $this->title=$requestPayload['artTitle'];
        //imlode  函数  把tags数组转换成字符串
        $this->tags=implode(",",$requestPayload['artTags']);
        $this->content=$requestPayload['artArtical']['content'];
        //html存入数据库进行转义  预处理
        $this->html=htmlspecialchars($requestPayload['artArtical']['html']);
        $this->time=$requestPayload['artTime'];
        $this->author=$requestPayload['artAuthor'];
        if(($this->title||$this->tags||$this->content||$this->html||$this->time||$this->author)!=null){
            $sql="INSERT INTO devilwzx_top.blog
            (artTitle, artAuthor,artTime,artContent,artHtml,artTags)
            VALUES('$this->title','$this->author','$this->time','$this->content','$this->html','$this->tags')";
           
            if(mysqli_query($this->conn, $sql)){
                $data['message']='插入成功';
            }else{
                $data['message']='插入失败';
            };
        }


        $data['tag']=$this->tags;
        $data['time']=$this->time;
        $data['status']=1;
        return $data;
    }

}

?>
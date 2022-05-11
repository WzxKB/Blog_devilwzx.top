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
        while ($row = mysqli_fetch_array($result)) {
            //追加数据
            array_push($res, $row);
        }
        $data['status'] = 1;
        $data['message'] = '查询成功';
        $data['data'] = $res;
        return $data;
    }

    //给blg表插入数据
    function insertBlogList($requestPayload)
    {
        $this->title = $requestPayload['artTitle'];
        //imlode  函数  把tags数组转换成字符串
        $this->tags = implode(",", $requestPayload['artTags']);
        $this->content = $requestPayload['artArtical']['content'];
        //html存入数据库进行转义  预处理
        $this->html = htmlspecialchars($requestPayload['artArtical']['html']);
        $this->time = $requestPayload['artTime'];
        $this->author = $requestPayload['artAuthor'];

        //插入blog信息
        $sql = "INSERT INTO devilwzx_top.blog
        (artTitle, artAuthor,artContent,artHtml,artTags,artTime)
        VALUES('$this->title','$this->author','$this->content','$this->html','$this->tags','$this->time')";


        //查询blog是否需要更新,如果名字和作者是一样的话,就更新那个blog
        $sql2 = "SELECT artTitle, artAuthor
        FROM devilwzx_top.blog
        WHERE artTitle='$this->title' and artAuthor='$this->author';";

        //更新操作
        $sql3 = "UPDATE devilwzx_top.blog
        SET artTags='$this->tags', artTime='$this->time', artContent='$this->content', artHtml='$this->html'
        WHERE artTitle='$this->title' and artAuthor='$this->author';";

        //如果这些数据有一项不为空则插入
        if (($this->title || $this->tags || $this->content || $this->html || $this->time || $this->author) != null) {

            //查询数据库中有没有同title同author的文章,如果有就更新它的内容,如果没有就增加一个文章.
            //把查询结果放在数组中,在看它是不是为空
            if (mysqli_fetch_assoc(mysqli_query($this->conn, $sql2))!= null) {
                mysqli_query($this->conn, $sql3);
                $data['message'] = '更新数据成功';
            }else if(mysqli_query($this->conn, $sql)) {
                $data['message'] = '插入数据成功';
            }else {
                $data['message'] = '插入数据失败';
            }            
        }
        $data['status'] = 1;
        return $data;
    }

}

?>
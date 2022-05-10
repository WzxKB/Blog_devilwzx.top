<?php

//开启错误报告
ini_set('display_errors', 1);
error_reporting(E_ALL);

//设置中国时区
date_default_timezone_set('PRC');

//设置这个文件的路径为BASE_PATH
define("BASE_PATH", __DIR__);
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers:DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept-Language, Origin, Accept-Encoding");
require_once BASE_PATH . '/Controller/controller.class.php';
/**
 * token
 */
//获取网页的密钥，并且把它存到GlobalToken中
$GlobalToken = isset($_SERVER['HTTP_TOKEN']) ? $_SERVER['HTTP_TOKEN'] : '';
define('GlobalToken', $GlobalToken);

/**
 * 控制器
 */
//通过api获取c,c代表用哪个控制器
$controller_beforeName = isset($_GET['c']) ? $_GET['c'] : ''; //控制器前缀
$controller_name = $controller_beforeName . '.class'; //控制器名称
$controller_path = BASE_PATH . '/Controller/' . $controller_name . '.php'; //控制器路径


/**
 * 方法
 */
//通过api获取a,a代表要干什么,即通过后断做的事情,它是在controller里的方法
$GlobalAction = isset($_GET['a']) ? $_GET['a'] : '';
define('GlobalAction', $GlobalAction);


/**
 * 请求参数即Request Payload
 * Content-Type: application/json
 */
//获取请求参数, file_get_contents("php://input")是指打开前端post过来的数据,
$requestPayload = file_get_contents("php://input");
//如果requestPayload不是空的话,那么把他转化为数组,
$requestPayload = !empty($requestPayload) ? json_decode($requestPayload, true) : array();

/**
 * 检查控制器和方法是否存在并实例化
 */
//检查文件路径下的文件是否存在
if (file_exists($controller_path)) {
    //新建一个实例
   
    $controller = new $controller_beforeName();
    //is_callable是php的函数,is_callable() 函数用于检测函数在当前环境中是否可调用。
    if (is_callable(array($controller, $GlobalAction))) {
    //业务,让控制器使用指定函数,输出为json数据
    echo json_encode($controller->$GlobalAction($requestPayload));
    $controller->conn->close();
    }
}


// $controller = new $controller_beforeName();
// echo json_encode($controller->$GlobalAction($requestPayload));
// if (file_exists(BASE_PATH . '/Controller/blog.class.php')) {
    // $controller = new blog();
    // header('Access-Control-Allow-Origin:*');
    // echo json_encode($controller->getBlogList($requestPayload));

// }

?>
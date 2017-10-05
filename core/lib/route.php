<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:59
 */
namespace core\lib;
class route{
    public $controller;
    public $action;
    public function __construct()
    {
        //xxx.com/index/index  index=>c index->f
        /**
         * 1、隐藏index.php
         * 2、获取url参数部分
         * 3、返回对应控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
            // /index/index
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/',trim($path,'/'));
            if(isset($pathArr[0])){
                $this->controller = $pathArr[0];
            }
            unset($pathArr[0]);
            if(isset($pathArr[1])){
                $this->action = $pathArr[1];
            }else{
                $this->action = \core\lib\conf::get('CTRL','route');
            }
            unset($pathArr[1]);
            //把url多余部分转换为get参数
            //url /index/index/id/1
            $count = count($pathArr) +2 ;
            $i = 2;

            while($i<$count){
                $_GET[$pathArr[$i]] = $pathArr[$i+1];
                $i+=2;
            }

        }else{
            $this->controller = \core\lib\conf::get('CTRL','route');
            $this->action = \core\lib\conf::get('ACTION','route');
        }
    }
}
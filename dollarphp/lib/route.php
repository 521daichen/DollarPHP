<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:59
 */
namespace dollarphp\lib;
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

            //模块
            if(isset($pathArr[0])){
                $this->module = $pathArr[0];
            }
            unset($pathArr[0]);

            //控制器
            if(isset($pathArr[1])){
                $this->controller = $pathArr[1];
            }else{
                $this->controller = conf::get('CTRL','route');
            }
            unset($pathArr[1]);
            //方法
            if(isset($pathArr[2])){
                $this->action = $pathArr[2];
            }else{
                $this->action = conf::get('CTRL','route');
            }
            unset($pathArr[2]);
            //把url多余部分转换为get参数
            //url /index/index/id/1
            $count = count($pathArr) +3 ;
            $i = 3;
            while($i<$count){
                $_GET[$pathArr[$i]] = $pathArr[$i+1];
                $i+=3;
            }
        }else{
            $this->controller = conf::get('CTRL','route');
            $this->action = conf::get('ACTION','route');
        }
    }
}
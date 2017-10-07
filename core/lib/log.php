<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 18:11
 */
namespace core\lib;
class log{
    /**
     * 1.确定日志存储方式
     * 2.写日志
     */
    public $class;

    public function __construct()
    {
        global $dollarApp;


        //确定存储方式
        $drive = conf::get('DRIVE','log');
//        $class = '\\core\lib\drive\log\\'.$drive;
        $class = '\\core\lib\Log\\'.$drive;
//        $this->class = new $class;


//        return $dollarApp->get('log');

    }

//    static public function init(){
//
//    }

//
//    static public function log($name,$file='log'){
//        self::$class->log($name);
//    }

}
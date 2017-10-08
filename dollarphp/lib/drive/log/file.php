<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 18:12
 */
namespace dollarphp\lib\drive\log;

use dollarphp\lib\conf;

class file{
    public $path;  //日志存储位置
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    public function log($message,$file='log'){
        /**
         * 1 确定文件存储位置是否存在
         *      不存在 新建目录
         *      存在
         * 2 写入日志
         */

        if(!is_dir($this->path)){
            mkdir($this->path,0777,true);
        }
//        $message .=date('Y-m-d H:i:s');
        $message = date('Y-m-d H:i:s').json_encode($message).PHP_EOL;
//        echo $this->path.$file.'.php';
        return file_put_contents($this->path.'\\'.date('YmdH').$file.'.php', json_encode($message),FILE_APPEND);
    }
}
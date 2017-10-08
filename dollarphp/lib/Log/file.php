<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7
 * Time: 23:20
 */
namespace dollarphp\lib\Log;

use dollarphp\lib\interfaces\ILog;

class file implements ILog {

//    const ERROR_PATH = DOLLAR.'/logs'.'error';
//    const INFO_PATH = DOLLAR.'/logs'.'info';
//    const DEBUG_PATH = DOLLAR.'/logs'.'debug';
//    const WARNING_PATH = DOLLAR.'/logs'.'warning';

    public $path = DOLLAR.'/logs';
    /**
     * 将日志存入根目录下 log/$level/log_2017xxoo.log
     */
    public function log($level,$message)
    {
        // 1、判断是否有文件夹存在，如果没有创建文件夹
        // 2、获取日志级别，创建日志级别目录
        // 3、将日志写入文件
        $levelPath = $this->path.'/'.$level;

        if(!is_dir($this->path)){

            mkdir($this->path,0777,true);
        }

        if(!is_dir($levelPath)){
            mkdir($levelPath,0777,true);
        }

        $timeDir = $levelPath.'/'.date('Ymd');
        if(!is_dir($timeDir)){
            mkdir($timeDir,0777,true);
        }

        $httpStatus = $_SERVER['REDIRECT_STATUS'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $logPath = $levelPath.'/'.date('Ymd').'/'.$level.date('YmdH').'.log';
        $formatMessage = '['.$httpStatus.'] '.'['.$httpMethod.'] '.'['.date("Y-m-d H:i:s").'] '.$message.PHP_EOL;
        file_put_contents($logPath,$formatMessage,FILE_APPEND);

    }

    function error($message)
    {
        $this->log('error',$message);
        // TODO: Implement error() method.
    }

    function info($message)
    {
        $this->log('info',$message);
        // TODO: Implement info() method.
    }

    function debug($message)
    {
        $this->log('debug',$message);
        // TODO: Implement debug() method.
    }

    function warning($message)
    {
        $this->log('warning',$message);
        // TODO: Implement warning() method.
    }
}
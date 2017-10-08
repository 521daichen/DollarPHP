<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7
 * Time: 18:57
 */

namespace dollarphp\lib;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonoLog {

    protected $Logger;

    public function __construct()
    {
        $this->Logger = new Logger('dollar');
    }

    /**
     * @param $name
     * @param $level
     * @param $path
     * 日志记录
     */
    function createLog($level,$path='dollarLog/to/dollar.log'){
//        echo $level;
//        exit();

        switch ($level){
            case 'ERROR':
                $level = Logger::ERROR;
            case 'DEBUG':
                $level = Logger::DEBUG;
            case 'NOTICE':
                $level = Logger::NOTICE;
            case 'WARNING':
                $level = Logger::WARNING;
            case 'CRITICAL':
                $level = Logger::CRITICAL;
            case 'ALERT':
                $level = Logger::ALERT;
            default:
                $level = Logger::INFO;
        }

        $path = $path.date('YmdH');
        $this->Logger->pushHandler(new StreamHandler($path, $level));

    }

    /**
     * @param $method info/warning/error
     *
     */
    function log($method,$message,$record=''){


        $this->Logger->$method($message);

//        if($record){
//
//            $this->Logger->pushProcessor(function ($record) {
//                $record['extra']['dummy'] = 'Hello world!sssssssssssssssssss';
//                return $record;
//            });
//
//        }
    }


    // create a log channel


//$log->pushHandler(new StreamHandler('path/to/yousr.log', Logger::INFO));
////        $log->pushHandler(new StreamHandler('path/to/yours.log', Logger::WARNING));
//
//// add records to the log
//
////        $log->error('Bar');
//$log->pushProcessor(function ($record) {
//    $record['extra']['dummy'] = 'Hello world!sssssssssssssssssss';
//    return $record;
//});
//
//echo $log->info('Adding a new user', array('username' => 'Seldaek'));





}
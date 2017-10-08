<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 14:48
 */
namespace helper;
class Log{

    static $instance;
    static function _getInstance()
    {
        global $dollarApp;
        self::$instance = $dollarApp->get('log');
    }
    static function log($level,$message)
    {
        self::_getInstance();
        return self::$instance->log($level,$message);
    }

    static function error($message)
    {
        self::_getInstance();
        return self::$instance->error($message);
    }

    static function info($message)
    {
        self::_getInstance();
        return self::$instance->info($message);
    }

    static function debug($message)
    {
        self::_getInstance();
        return self::$instance->debug($message);

    }

    static  function warning($message)
    {
        self::_getInstance();
        return self::$instance->warning($message);
    }
}
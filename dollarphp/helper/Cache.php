<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 14:48
 */
namespace dollarphp\helper;
class Cache{

    static $instance;
    static function _getInstance()
    {
        global $dollarApp;
        self::$instance = $dollarApp->get('cache');
    }


//    static function Cache($exp_time=3600,$path="cache/sys/")
//    {
//
//        self::_getInstance();
//        return self::$instance->Cache($exp_time,$path);
//    }

    static function put($key, $data)
    {
        self::_getInstance();
        return self::$instance->put($key, $data);
    }

    static function get($key)
    {
        self::_getInstance();
        return self::$instance->get($key);
    }
}
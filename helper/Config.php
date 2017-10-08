<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 14:44
 */

namespace helper;
/**
 * Class Config
 * @package helper
 * config助手类
 */
class Config{

    static $instance;
    static function _getInstance()
    {
        global $dollarApp;
        self::$instance = $dollarApp->get('config');
    }
    static function get($name,$file='config',$path = '')
    {
        self::_getInstance();
        return self::$instance->get($name,$file,$path);
    }

    static function all($file='config',$path='')
    {
        self::_getInstance();
        return self::$instance->all($file,$path);
    }
}
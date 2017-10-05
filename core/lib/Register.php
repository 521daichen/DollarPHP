<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:49
 */
namespace core\lib;
/**
 * Class Register
 * @package core\lib
 * 注册树模式
 */
class Register{

    static protected $objects;
    /**
     * set
     * 将一个对象注册到全局树上
     * 调用set方法的时候将对象映射到注册树上
     */
    static function set($alias,$object){
        self::$objects[$alias] = $object;
    }

    /**
     * 调用unset将该对象从树上移除
     */
    static function _unset($alias){
        unset(self::$objects[$alias]);
    }

    static function get($name){
        return  self::$objects[$name];
    }
}
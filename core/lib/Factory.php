<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:43
 */
namespace core\lib;

/**
 * Class Factory
 * @package core\lib
 * 工厂模式
 */
class Factory{
    static function createDatabase(){
        //工厂模式用来生产对象
        //工厂模式+单例模式
        //工厂模式+单例模式+注册树模式
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }
}
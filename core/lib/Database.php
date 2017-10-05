<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:46
 */
namespace core\lib;


interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}



/**
 * Class Database
 * @package core\lib
 * 单例模式
 */
class Database{
    static protected $db;
    /**
     * Database constructor.
     * 私有方法防止其他地方new这个类
     * 单例模式
     */
    private function __construct()
    {
    }

    /**
     * 获取实例
     */
    static function getInstance(){
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }
    }

}
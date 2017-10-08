<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 17:50
 */
//return array(
//    'DSN' => 'mysql:host=localhost;dbname=dollar',
//    'USERNAME' => 'root',
//    'PASSWD' => 'root'
//);


return array(
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'dollar',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // 可选参数
    'port' => 3306,

    // 可选，定义表的前缀
    'prefix' => '',

    // 连接参数扩展, 更多参考 http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
);
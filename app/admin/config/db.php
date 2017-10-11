<?php
/**
 * Created by PhpStorm daichen.
 * User: Administrator
 * Date: 2017/10/11
 * Time: 14:58
 */
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
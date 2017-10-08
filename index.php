<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:46
 */
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

date_default_timezone_set("PRC");

header('Content-type:text/html;charset=utf8');
//定义当前框架所在的目录
define('DOLLAR',realpath('./'));

define('BASEDIR',__DIR__);


//框架核心
define('CORE',DOLLAR.'/core');
//模块目录
define('MODULE','app');
//项目目录
define('APP',DOLLAR.'/'.MODULE);
//插件模式
define('PLUGIN',false);
//配置路由
define('ROUTE_CONFIG',true);

//调试模式
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

//加载公共函数库
include CORE.'/common/function.php';
//加载框架入口
include CORE.'/dollar.php';
//自动加载
//当new一个类的时候 如果类不存在，那么会触发这个方法 允许存在多个
spl_autoload_register('\core\dollar::load');
//spl_autoload_register('\core\dollar::load1');
//加载扩展
if(PLUGIN){
\core\dollar::loadExt();
}
//创建注入容器
$dollarApp = new DI\Di();
//初始化注入服务
\DI\DiService::init($dollarApp);

//启动框架
$dollarApp->get('dollar')->run();

//\core\dollar::run();

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 23:09
 */

date_default_timezone_set("PRC");
header('Content-type:text/html;charset=utf8');

//定义当前框架所在的目录
define('DOLLAR',realpath('./'));
define('BASEDIR',__DIR__);
//框架核心
define('dollarphp',DOLLAR.'/dollarphp');
//模块目录 可配置
define('MODULE','app/home');
//项目目录
define('APP',DOLLAR.'/'.MODULE);
//配置路由
define('ROUTE_CONFIG',true);
//调试模式
define('DEBUG',true);
//模块配置目录
define('MODULE_CONFIG',DOLLAR.'\\'.MODULE.'\\config\\');

//插件模式
define('PLUGIN',false);

define('__BOOTSTRAP__','public/'.basename('bootstrap'));
define('__STATIC__','public/'.basename('home'));

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
include dollarphp.'/common/function.php';
//加载框架入口
include dollarphp.'/dollar.php';
//自动加载
//当new一个类的时候 如果类不存在，那么会触发这个方法 允许存在多个
spl_autoload_register('\dollarphp\dollar::load');
//spl_autoload_register('\dollarphp\dollar::load1');
//加载扩展
if(PLUGIN){
    \dollarphp\dollar::loadExt();
}
//创建注入容器
$dollarApp = new \dollarphp\DI\Di();
//初始化注入服务
\dollarphp\DI\DiService::init($dollarApp);

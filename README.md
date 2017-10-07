# DollarPHP
A PHP Framework for my cat

## 前言
此框架为个人项目，为什么要叫DollarPHP呢？因为我的喵叫 $ 。
写这个框架纯粹是为了学习，有兴趣一起学习或者有任何建议吐槽的可以联系我
> QQ:543577508 橙橙同学

## 使用方法：
git clone https://github.com/521daichen/DollarPHP

php composer.phar install

## 路由配置：
此项目使用第三方路由组件fastRoute
文档：
https://github.com/nikic/FastRoute

请在index.php下define('ROUTE_CONFIG',true);打开路由配置模式
配置文件：\core\config\router.php
配置语法：上述文档所述。
```
$dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('POST', '/users', '\app\controller\index@index');
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', '\app\controller\index@getuser');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    $r->addRoute('GET', '/', '\app\controller\index@index');
    }
);
```


## IOC容器：
此项目采用了全局ioc容器，将常用的类方法全部塞入$dollarApp全局容器中，使用的时候无需再实例化对象。方便对整个项目中常用类的管理和使用
IOC配置：
\core\config\Di.php
配置所需要的类文件和映射即可 如：
 'log'=>'\core\lib\Log\file'

使用方法：
全局容器实例 $dollarApp

global $dollarApp;
$logger = $dollarApp->get('log');
$logger->......

## 日志:
```
global $dollarApp;
$logger = $dollarApp->get('log');
$logger->log($level,$message);
$logger->error($message);
$logger->debug($message);
$logger->info($message);
$logger->warning($message);
框架会自动在根目录下创建logs目录，并根据不同日志级别创建相应分类，自动创建每日目录防止日志过大，单log文件每小时创建一个防止文件过大。
```

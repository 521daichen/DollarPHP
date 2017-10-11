# DollarPHP
A PHP Framework for my cat

## 更新

2017/10/7
增加日志、Twig模板引擎、FastRouter路由

2017/10/8 

增加助手类Config/Log/MarkDown   分离路由配置   更改部分框架目录
调整框架目录，增加public静态资源目录并动态加载

2017/10/11
修复助手类因调整目录所带来的演示首页的bug

终于支持多模块了，但是实现还是很LOW，访问路径不够灵活

## 前言
此框架为个人项目，为什么要叫DollarPHP呢？因为我的喵叫 $ 。
写这个框架纯粹是为了学习，有兴趣一起学习或者有任何建议吐槽的可以联系我
> QQ:543577508 橙橙同学

## 使用方法：
git clone https://github.com/521daichen/DollarPHP

php composer.phar install

## 路由配置：
此项目使用第三方路由组件`FastRoute`
文档：
https://github.com/nikic/FastRoute

请在`index.php`下`define('ROUTE_CONFIG',true);`打开路由配置模式
配置文件：`\dollarphp\config\router.php`
配置语法：上述文档所述。
```php
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

> 若关闭路由配置模式，路由将启动自动配置，即
> 匹配模式：控制器/方法/参数
    index/index/id/1
    即index 控制器下的 index 方法 参数为 id 值为 1



## IOC容器：
此项目采用了全局ioc容器，将常用的类方法全部塞入`$dollarApp`全局容器中，使用的时候无需再实例化对象。方便对整个项目中常用类的管理和使用
IOC配置：
`\core\config\Di.php`
配置所需要的类文件和映射即可 如：
` 'log'=>'\dollarphp\lib\Log\file'`

使用方法：
全局容器实例 `$dollarApp`
```php
global $dollarApp;
$logger = $dollarApp->get('log');
$logger->......
```
## 日志:
```php
global $dollarApp;
$logger = $dollarApp->get('log');
$logger->log($level,$message);
$logger->error($message);
$logger->debug($message);
$logger->info($message);
$logger->warning($message);
框架会自动在根目录下创建logs目录，并根据不同日志级别创建相应分类，自动创建每日目录防止日志过大，单log文件每小时创建一个防止文件过大。
```


## 助手类（让调用更加方便简洁）:
```php
MarkDown::text('ssdds');
Config::get('name');
Log::log('error','sdsd');

```

## MarkDown
```php
echo MarkDown::text('# 标题');
支持markdown语法
http://www.appinn.com/markdown/
```

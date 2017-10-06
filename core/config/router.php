<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/6
 * Time: 17:32
 */

$dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/users/{id:\d+}', '\app\controller\index@index');
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', '\app\controller\index@getuser');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    }
);

return $dispatcher;





//$dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
//    $r->
//    // {id} must be a number (\d+)
//    $r->
//    // The /{title} suffix is optional
//    $r->
//});
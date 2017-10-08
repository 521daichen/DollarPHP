<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/6
 * Time: 17:32
 */

$dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/users', '\app\controller\home\index@index');
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/test', '\app\home\controller\test@index');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    $r->addRoute('GET', '/', '\app\home\controller\index@index');
}
);
return $dispatcher;

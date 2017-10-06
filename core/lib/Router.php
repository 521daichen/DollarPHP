<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/6
 * Time: 17:28
 */

namespace core\lib;

class  Router{

    /**
     * 自动匹配
     */
    public function autoMatch(){

        $route = new \core\lib\route();
        $controller = $route->controller;
        $action = $route->action;
//        $ctrlfile = APP.'/controller/'.$controller.'.php';
        $ctrlClass = '\\'.MODULE.'\controller\\'.$controller;
        $c = new $ctrlClass();
        $c->$action();

//        if(is_file($ctrlfile)){
//            include $ctrlfile;
//            $c = new $ctrlClass();
//            $c->$action();
//        }
    }

    /**
     * 配置匹配
     */
    public function run(){
        $dispatcher = \core\lib\conf::all('router');

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);
        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                // ... 404 Not Found
                break;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // ... 405 Method Not Allowed
                break;
            case \FastRoute\Dispatcher::FOUND:

                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                // ... call $handler with $vars
                //匹配方法
                $regMethod = '/@(.*)/';
                $methodRrg = preg_match($regMethod,$handler,$matcheMethods);
                $methodName = $matcheMethods[1];
                //匹配控制器
                $regControllerName = '/(.*)@/';
                $controllerReg = preg_match($regControllerName,$handler,$matcheControllers);
                $controllerNAME = $matcheControllers[1];

                $c = new $controllerNAME();
                $c->$methodName($vars);
                break;
        }

    }


}
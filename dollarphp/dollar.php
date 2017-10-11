<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:51
 */
namespace dollarphp;
use app\index;

class dollar{

    public static $classMap = array();
    public $assign = array();

    /**
     * 加载
     */
    static public function loadExt(){
        //加载插件
        \dollarphp\lib\LoadPlugin::loadPlugins();
    }

    static public function run(){
//        \dollarphp\lib\log::init();
//        \dollarphp\lib\log::log('test');
        $router = new \dollarphp\lib\Router();
        if(ROUTE_CONFIG){
            //如果开启路由配置模式 使用fast_router
            $router->run();
        } else{
            //没有就 /index/index/index 模块/控制器/方法
            $router->autoMatch();
        }
    }

    static public function load($class)
    {
        //自动加载内库
        //new \dollarphp\route();
        // $class = '\dollarphp\route';
        // DOLLAR.'/dollarphp/route.php';
        if(isset(self::$classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = DOLLAR.'/'.$class.'.php';

            if(file_exists($file) && is_file($file)){
                self::$classMap[$class] = $class;
                include $file;
            }else{
                return false;
            }
        }
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:51
 */
namespace core;
use app\index;

class dollar{

    public static $classMap = array();
    public $assign = array();

    /**
     * 加载
     */
    static public function loadExt(){
        //加载插件
        \core\lib\LoadPlugin::loadPlugins();
    }

    static public function run(){
        \core\lib\log::init();
        \core\lib\log::log('test');
        $router = new \core\lib\Router();
        if(ROUTE_CONFIG){
            $router->run();
        } else{
            $router->autoMatch();
        }
    }

    static public function load($class)
    {
        //自动加载内库
        //new \core\route();
        // $class = '\core\route';
        // DOLLAR.'/core/route.php';
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

    public function assign($name,$value){
        $this->assign[$name] = $value;
    }
    public function display($file){
        $file = APP.'/views/'.$file.'.html';

        if(is_file($file)){

//            extract($this->assign);
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => DOLLAR.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->load('index.html');
            $template->display($this->assign?$this->assign:'');

//            include $file;
        }

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 10:48
 */

namespace dollarphp\lib;
class Controller {

    public $assigns=[];

    public function assign($name,$value){
        $this->assigns[$name] = $value;

    }

    public function display($view){
        $view = strtolower($view);
        $point = strpos($view,'/');
        $controllerDir = substr($view,0,$point).'/';
        $methodName = substr($view,$point);
        $loader = new \Twig_Loader_Filesystem(MODULE.'/views/'.$controllerDir);
        $twig = new \Twig_Environment($loader, array(
            'debug'=>DEBUG,
            'cache' => DOLLAR.'/cache/twig',
            /* 'cache' => './compilation_cache', */
        ));
        $template = $twig->load($methodName.'.html');
        $template->display($this->assigns?$this->assigns:'');
//        echo $twig->render('index.html',$this->assigns);
    }
}
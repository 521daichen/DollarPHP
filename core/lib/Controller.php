<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 10:48
 */

namespace core\lib;
class Controller {

    public $assigns=[];

    public function assign($name,$value){
        $this->assigns[$name] = $value;

    }

    public function display($view){
        $loader = new \Twig_Loader_Filesystem(APP.'./views');
        $twig = new \Twig_Environment($loader, array(
            'debug'=>DEBUG,
            'cache' => DOLLAR.'/cache/twig',
            /* 'cache' => './compilation_cache', */
        ));

        $template = $twig->load($view.'.html');
        $template->display($this->assigns?$this->assigns:'');

//        echo $twig->render('index.html',$this->assigns);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 10:48
 */

namespace dollarphp\lib;
use dollarphp\lib\TwigExtends\TwigExt;
use dollarphp\lib\TwigExtends\TwigFilterExt;
use Symfony\Component\HttpFoundation\Request;

class Controller {

    public $assigns=[];
    public $request;

    public function __construct()
    {
        $request = new Request(
            $_GET,
            $_POST,
            array(),
            $_COOKIE,
            $_FILES,
            $_SERVER
        );
        $this->request =   $request;
    }

    public function assign($name,$value){
        $this->assigns[$name] = $value;

    }

    public function display($view){
        $view = strtolower($view);
        $point = strpos($view,'/');
        $controllerDir = substr($view,0,$point).'/';
        $methodName = substr($view,$point);
        $loader = new \Twig_Loader_Filesystem(MODULE.'/views/');
        $twig = new \Twig_Environment($loader, array(
            'debug'=>DEBUG,
            'cache' => DOLLAR.'/cache/twig',
            /* 'cache' => './compilation_cache', */
        ));
        $ext = DOLLARPHP.'\lib\TwigExtends';


        //加载自定义扩展
        $twigExter = new TwigExt();
        //加载自定义过滤器
        foreach ($twigExter->filterList as $name=>$value){
            $function = new \Twig_SimpleFilter($name,$value);
            $twig->addFilter($function);
        }
        //加载自定义过滤器
        foreach ($twigExter->functionList as $name=>$value){
            $function = new \Twig_SimpleFunction($name,$value);
            $twig->addFunction($function);
        }

        //这里之所以这么写 是因为指定的模板目录在模板中使用 extends 或者include的时候 不能正常加载
        $template = $twig->load('/'.$controllerDir.'/'.$methodName.'.html');
        $template->display($this->assigns?$this->assigns:[]);
//        echo $twig->render('index.html',$this->assigns);
    }
}
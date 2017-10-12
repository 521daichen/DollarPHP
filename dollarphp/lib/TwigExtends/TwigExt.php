<?php
/**
 * Created by PhpStorm daichen.
 * User: Administrator
 * Date: 2017/10/12
 * Time: 11:25
 */
/**
 * @param $controller
 * @param $method
 * Twig Url 扩展
 */

namespace dollarphp\lib\TwigExtends;

use dollarphp\helper\Config;

class TwigExt{

    public $filterList = [];
    public $functionList = [];
    //加载
    function __construct(){
        $filterFile = DOLLARPHP.'lib\TwigExtends\TwigExtFile';
        $this->filterList = Config::all('filter',$filterFile);

        $functionFile = DOLLARPHP.'lib\TwigExtends\TwigExtFile';
        $this->functionList = Config::all('function',$functionFile);
    }

}


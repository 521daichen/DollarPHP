<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7
 * Time: 16:45
 */
namespace DI;
use core\lib\conf;

/**
 * Class DiService
 * @package DI
 * 服务容器
 */
class DiService {
    protected static $Di;
    protected static $classList = array();

    /**
     * 初始化框架内置服务
     */
    public static function init(Di $DiObj){

        self::$Di = $DiObj;
        self::$classList = conf::all('di');
        foreach (self::$classList as $classAlias=>$className){
            //设置共享服务
            self::$Di->setShared($classAlias,$className,true);
        }
    }

}
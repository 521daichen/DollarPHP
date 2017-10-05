<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 17:16
 */
namespace core\lib;
class conf{
    static public $conf = array();
    static public function get($name,$file){
        /**
         * 1 配置文件是否存在
         * 2 配置是否存在
         * 3 缓存配置
         */
        if(isset(self::$conf[$file]) && self::$conf[$file]){
            return self::$conf[$file][$name];
        }else{
            $file = DOLLAR.'\\core\config\\'.$file.'.php';
            if(is_file($file)){
                $conf = include $file;
                if(isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有这个配置项'.$name);
                }
            }else{
                 throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
    static public function all($file){
        if(isset(self::$conf[$file]) && self::$conf[$file]){

            return self::$conf[$file];
        }else{

            $file = DOLLAR.'\\core\config\\'.$file.'.php';
            if(is_file($file)){
                $conf = include $file;
                self::$conf[$file] = $conf;

                return self::$conf[$file];
            } else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
}
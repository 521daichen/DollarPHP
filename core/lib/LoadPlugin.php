<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:59
 */
namespace core\lib;
use core\lib\Plugin\PluginGenerator;
/**
 * Class LoadPlugin
 * @package core\lib
 * 加载插件
 */
class LoadPlugin extends PluginGenerator{

    static function loadPlugins(){
        $scanDir = APP.'/plugin';
        $dir = dir($scanDir);
        $file = $dir->read();
        while ($file = $dir->read()){

            if($file!='.' && $file!='..')
            {
                $pluginFile = $scanDir.'/'.$file;
                //插件验证机制
                if(is_file($pluginFile)){
                    //显示不带有文件扩展名的文件名
                    $className = basename($file,".php");
                    require ($pluginFile);
                    $pluginClassName = "\\app\\plugin\\".$className;
                    $classObj = new $pluginClassName();
                    //注册插件
                    parent::regPlugin($classObj);
                }
            }

        }
    }
}
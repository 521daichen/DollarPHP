<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:19
 */
namespace dollarphp\lib\Plugin;
use dollarphp\lib\Plugin\IPlugin;

/**
 * Interface IPlugin
 * @package dollarphp\lib\plugin
 * 观察者模式 事件发生者
 */
abstract class PluginGenerator{

    private static $plugins;

    /**
     * @param IPlugin $plugin
     * 注册插件
     */
    public static function regPlugin(IPlugin $plugin){
        self::$plugins[strval($plugin)]=$plugin;
    }

    /**
     * @param IPlugin $plugin
     * 注销插件
     */
    function unRegPlugin(IPlugin $plugin){
        unset($this->plugins[strval($plugin)]);
    }
    /**
     * 执行插件代码
     */
    function notify(){
        foreach ($this->plugins as $plugin){
            //逐个去执行每一个观察者的update方法 让观察者在事件发生以后逐一自动更新
            $plugin->behavior();
        }
    }
}
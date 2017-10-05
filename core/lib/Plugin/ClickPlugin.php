<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:25
 */
namespace core\lib\Plugin;
/**
 * Class ClickPlugin
 * @package app\lib\Plugin
 * 点击插件
 */
class ClickPlugin implements IPlugin {

    function behavior()
    {
        echo "this is click plugin";
    }
    function __toString()
    {
        return __class__;
    }
}
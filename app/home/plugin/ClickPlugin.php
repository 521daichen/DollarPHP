<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 21:13
 */
namespace app\plugin;

use dollarphp\lib\Plugin\IPlugin;

class ClickPlugin implements IPlugin{

    function __construct()
    {
        echo "FUCK";
    }

    function behavior()
    {
        echo "my name is click Plugin";
        // TODO: Implement behavior() method.
    }

    function __toString()
    {
        return __CLASS__;
        // TODO: Implement __toString() method.
    }
}
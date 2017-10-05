<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 21:33
 */
namespace app\plugin;

use core\lib\Plugin\IPlugin;

class ZanPlugin implements IPlugin{
    function __construct()
    {
        echo 'zan 加载成功';
    }

    function behavior()
    {
        // TODO: Implement behavior() method.
    }

    function __toString()
    {
        return __CLASS__;
        // TODO: Implement __toString() method.
    }
}
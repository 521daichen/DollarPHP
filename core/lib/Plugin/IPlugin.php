<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 20:24
 */
namespace core\lib\Plugin;
/**
 * Interface IPlugin
 * @package app\lib\Plugin
 * 观察者
 */
interface IPlugin{
    function behavior();
    function __toString();
}
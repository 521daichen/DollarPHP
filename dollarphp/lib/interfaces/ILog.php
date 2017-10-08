<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7
 * Time: 23:18
 */
namespace dollarphp\lib\interfaces;

interface ILog{
    function log($level,$message);
    function error($message);
    function info($message);
    function debug($message);
    function warning($message);
}
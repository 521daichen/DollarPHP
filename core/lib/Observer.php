<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 14:39
 */
namespace core\lib;

/**
 * Interface Observer
 * @package core\lib
 * 观察者
 */
interface Observer{
    function update($event_info = null);
}
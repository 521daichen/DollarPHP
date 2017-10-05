<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 22:50
 */
namespace app\validate;
/**
 * Class BaseValidate
 * @package app\validate
 * 验证器基类
*/
class BaseValidate extends \GUMP{

    protected static $validator;

    function init($lang = 'zh-cn')
    {
        self::$validator = new parent();
        parent::__construct($lang);
    }
}
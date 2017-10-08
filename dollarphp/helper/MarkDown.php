<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 15:20
 */
namespace dollarphp\helper;

use Twig\Extension\SandboxExtension;

class MarkDown{

    static $instance;
    static function _getInstance()
    {
        global $dollarApp;
        self::$instance = $dollarApp->get('markdown');
    }
    static function text($text){
        self::_getInstance();
        return self::$instance->text($text);
    }
}
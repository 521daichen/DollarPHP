<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 14:20
 */
namespace core\lib;
class MaleUserStrategy implements UserStrategy{

    function showAd()
    {
        echo "iphone6";
    }

    function showCategory()
    {
        echo "电子产品";
    }
}
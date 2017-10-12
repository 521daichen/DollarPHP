<?php
/**
 * @param $controller
 * @param $method
 * @return string
 * Twig扩展配置
 */
$url = function($controller,$method)
{
    return '\\' . $controller . '\\' . $method;
};

$toJson = function ($data){
    return $data.'dollarphp';
};


return array(
    'url'=>$url,
    'toJson'=>$toJson
);


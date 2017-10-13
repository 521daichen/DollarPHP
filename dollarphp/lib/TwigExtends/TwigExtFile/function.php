<?php
/**
 * @param $controller
 * @param $method
 * @return string
 * Twig扩展配置
 */
$url = function($module,$controller,$method)
{

    return '/'.$module.'/' . $controller . '/' . $method;
};

return array(
    'url'=>$url,
);


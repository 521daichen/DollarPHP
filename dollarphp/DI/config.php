<?php
/**
 * IOC注入配置
 */
return array(
    'router'=>'\dollarphp\lib\Router',
    'requester'=>'\dollarphp\lib\Requester',
    'dollar'=>'\dollarphp\dollar',
    'logger'=>'\dollarphp\lib\MonoLog',
    'orm'=>'\dollarphp\lib\Orm',
    'log'=>'\dollarphp\lib\Log\file',
    'config'=>'\dollarphp\lib\Config',
    'markdown'=>'\Parsedown',
    'cache'=>'\dollarphp\lib\Cache',
);
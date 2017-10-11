<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 22:50
 */
namespace app\home\model;

use dollarphp\lib\model;

class dollarModel extends model{
    public $table = "dollar";
    public function lists()
    {
        $res = $this->select($this->table,'*');
        return $res;
    }
}
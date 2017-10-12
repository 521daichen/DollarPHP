<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 22:50
 */
namespace app\admin\model;

use dollarphp\lib\model;

class roleModel extends model{
    public $table = "role";
    public function lists()
    {
        $res = $this->select($this->table,'*');
        return $res;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 22:50
 */
namespace app\admin\model;

use dollarphp\lib\model;

class menuModel extends model{

    public $table = "access";
    public function lists()
    {
        return $this->select($this->table,'*');
    }

    public function getMenuByNode($node){
        return $this->get($this->table,'*',['node'=>$node]);
    }

    public function getMenuById($id){
        return $this->get($this->table,'*',['id'=>$id]);
    }

    public function updateMenu($data,$where){
        return $this->update($this->table,$data,$where);
    }

    public function delMenu($where){
        return $this->delete($this->table,$where);
    }
}
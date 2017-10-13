<?php
/**
 * Created by PhpStorm daichen.
 * User: Administrator
 * Date: 2017/10/12
 * Time: 14:01
 */
namespace app\admin\controller;

use app\admin\model\roleModel;
use dollarphp\lib\Controller;

class role extends Controller {


    public function index(){
        $roleModel = new roleModel();
        $lists = $roleModel->lists();

        $this->display('/role/index');
    }

    public function add(){
        $this->display('/role/add');
    }

}
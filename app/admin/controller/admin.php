<?php
/**
 * Created by PhpStorm daichen.
 * User: Administrator
 * Date: 2017/10/12
 * Time: 14:01
 */
namespace app\admin\controller;

use dollarphp\lib\Controller;

class admin extends Controller {


    public function index(){
        $this->display('/admin/index');
    }

}
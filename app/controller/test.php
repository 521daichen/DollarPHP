<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 16:05
 */

namespace app\controller;

use core\lib\Controller;

class test extends Controller{

    public function index()
    {

        $this->assign('daichen','sss');
        $this->display('test/index');
    }
}
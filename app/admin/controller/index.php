<?php
namespace app\admin\controller;

use dollarphp\lib\Controller;

class Index extends Controller {

    public function index()
    {
        $this->display('index/index');
    }

    public function welcome()
    {
        $this->display('index/welcome');
    }

}
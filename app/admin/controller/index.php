<?php
namespace app\admin\controller;

use dollarphp\lib\Controller;

class Index extends Controller {

    public function index()
    {
//var_export($this->requestquery->get('sss'));
        $this->display('index/index');
    }

    public function welcome()
    {
        $this->display('index/welcome');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 15:43
 */
namespace app\controller;
use app\validate\IndexValidate;
use core\dollar;
use core\lib\model;
use Symfony\Component\HttpFoundation\Request;

class index extends dollar {

    public function index($id)
    {
        var_export($id);
        exit();

        $data = [
            'username'=>'asdadssssssssssssss',
            'password'=>'sssssssssssssss'
        ];
        IndexValidate::doValidate($data);


//        $is_valid = \GUMP::is_valid($data, array(
//        'username' => 'required|alpha_numeric',
//        'password' => 'required|max_len,100|min_len,6'
//         ));
//
//        if($is_valid === true) {
//            // continue
//        } else {
//            print_r($is_valid);
//        }


        echo 1;
        exit();

        //这里使用单例+工厂模式
        $model = new \app\model\dollarModel();

//        dump($model->lists());

        $this->assign('daichen','daichens');
        $this->display('index');

//        $res = \core\lib\conf::get('CTRL','route');
//        $value = 'asdad';
//        $this->assign('a',$value);
//        $this->display('index');
//        $model = new \core\lib\modelPdo();
//        $a = $model->query('select * from aaa');
//        var_dump($a->fetchAll());
    }
}
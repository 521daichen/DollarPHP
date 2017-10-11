<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 15:43
 */
namespace app\home\controller;

use app\validate\IndexValidate;
use dollarphp\dollar;
use dollarphp\lib\Controller;
use dollarphp\lib\Log\file;
use dollarphp\lib\model;
use \dollarphp\helper\Config;
use \dollarphp\helper\Log;
use \dollarphp\helper\MarkDown;
use Symfony\Component\HttpFoundation\Request;

class index extends Controller {

    public function index($id)
    {

        $this->assign('daichen','sss');
        $this->display('test/index');
        exit();

        global $dollarApp;
//      $orm = new \dollarphp\lib\Orm();
        $orm = $dollarApp->get('orm');
        $log = $dollarApp->get('log');


        echo MarkDown::text("    copy;"); # prints: <p>Hello <em>Parsedown</em>!</p>

        exit();

        MarkDown::text('ssdds');///////////////;

//        $config = $dollarApp->get('config')->get('name');

        $config = Config::get('name');
        Log::log('error','sdsd');


        echo $config;
        exit();

        $arr = [
            '长江后浪推前浪',
            '前浪死在沙滩上'
        ];

        $this->assign('daichen',$arr);
        $this->display('index');



        $log->info('error','asdadss');
        $log->error('error','asdadss');
        $log->debug('error','asdadss');

//        $log = new file();

//        var_export($log->log('error','sdsd'));

        exit();
        $res = $orm->select("uid","uname","uage")->from('users')->select('upwd');
        echo $res;

        exit();
        global $dollarApp;
        $logger = $dollarApp->get('logger');
        $logger->createLog('NOTICE');
var_export($logger->log('info','asdsddsads'));
echo 1;
        exit();
        $request = Request::createFromGlobals();
//        $p = isset($_POST['foo'])?$_POST['foo']:'';

//        var_export($request->request->get('foo'));
//        $data = [
//            'username'=>'asdadssssssssssssss',
//            'password'=>'sssssssssssssss'
//        ];
//        IndexValidate::doValidate($data);


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




        //这里使用单例+工厂模式
//        $model = new \app\model\dollarModel();

//        dump($model->lists());

        $this->assign('daichen','daichens');
        $this->display('index');

//        $res = \dollarphp\lib\conf::get('CTRL','route');
//        $value = 'asdad';
//        $this->assign('a',$value);
//        $this->display('index');
//        $model = new \dollarphp\lib\modelPdo();
//        $a = $model->query('select * from aaa');
//        var_dump($a->fetchAll());
    }
}
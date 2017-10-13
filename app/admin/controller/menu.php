<?php
/**
 * Created by PhpStorm daichen.
 * User: Administrator
 * Date: 2017/10/12
 * Time: 14:01
 */
namespace app\admin\controller;
use app\admin\model\menuModel;
use dollarphp\helper\Config;
use dollarphp\lib\Controller;
require_once 'ext\PHPTree.class.php';
require_once 'ext\Tool.php';

class menu extends Controller {

    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new menuModel();
        parent::__construct();
    }

    public function index()
    {

        $lists = $this->menuModel->lists();
        $tree = tree($lists);
        $this->assign('menuList',$tree);
        $this->display('/menu/index');
    }

    public function edit(){
        $id = $this->request->query->get('menu_id');
        $menuInfo = $this->menuModel->getMenuById($id);
        $this->assign('menuInfo',$menuInfo);
        $this->display('/menu/edit');
    }

    public function menutree()
    {
        $lists = $this->menuModel->lists();
        $r = \PHPTree::makeTree($lists);
        $this->assign('r',$r);
        $this->display('/menu/menutree');

    }

    public function add(){
        if($this->request->isMethod('GET')){
            $lists = $this->menuModel->lists();
            $tree = tree($lists);
            $this->assign('menuList',$tree);
            $this->display('/menu/add');
        }else{
            if($this->request->isMethod('POST')){
                $data =  $this->request->request->all();
                //如果有menu_id传递过来 那么就是更新操作
                if(isset($data['menu_id'])){
                    $menu_id =  $data['menu_id'];
                    unset($data['menu_id']);
                    $this->update($data,['id'=>$menu_id]);
                }else{
                    $this->save($this->request->request->all());
                }

            }
        }
    }

    public function update($data,$where){
        $res = $this->menuModel->updateMenu($data,$where);
        if($res){
            echo dollarJson(200,'更新栏目成功',[]);
        }else{
            echo dollarJson(404,'节点标识不能为空',[]);
        }
    }

    public function save($data){

        if(!$this->request->request->get('name')) {
            echo dollarJson(404, '节点名称不能为空', []);
            return;
        }
        if(!$this->request->request->get('node')){
            echo dollarJson(404,'节点标识不能为空',[]);
            return;
        }
        if($this->menuModel->getMenuByNode($this->request->request->get('node'))){
            echo dollarJson(404,'节点名称已经存在',[]);
            return;
        }
        $last_user_id = $this->menuModel->insert("access",$data);
        if($last_user_id){
            echo dollarJson(200,'增加栏目成功',[]);
        }
    }

    public function delete($where){

        $res = $this->menuModel->delMenu($where);
        if($res){
            echo dollarJson(200,'删除栏目成功',[]);
        }else{
            echo dollarJson(404,'删除栏目失败',[]);
        }
    }

    public function del(){
        if($this->request->isMethod('GET')){
            return;
        }else{
            if($this->request->isMethod('POST')){
                $menu_id = $this->request->request->get('menu_id');
                if(isset($menu_id)){
                    $this->delete(['id'=>$menu_id]);
                }

            }
        }
    }

}
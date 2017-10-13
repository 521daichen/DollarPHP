<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 14:50
 */


function Err(){
    echo 1;
}

/**
 * @param $directory
 * @return array 文件名列表
 * 遍历文件夹 并去除掉扩展名
 *
 */
function getFileList($directory) {
    $files = array();
    if(is_dir($directory)) {
        if($dh = opendir($directory)) {
            while(($file = readdir($dh)) !== false) {
                if($file != '.' && $file != '..') {
                    $files[] = basename($file,'.php');

                }
            }
            closedir($dh);
        }
    }
    return $files;
}

/**
 * @param int $status
 * @param string $message
 * @param array $data
 * @return string
 * 返回JSON数据格式
 */
function dollarJson($status=200,$message="",$data=[]){
    $return = [
        'status'=>$status,
        'message'=>$message,
        'data'=>$data
    ];
    return  json_encode($return);
}

function tree(&$list,$pid=0,$level=0,$html='—— '){
    static $tree = array();
    foreach($list as $v){
        if($v['parent_id'] == $pid){
            $v['sort'] = $level;
            $v['html'] = str_repeat($html,$level);
            $tree[] = $v;
            tree($list,$v['id'],$level+1);
        }
    }
    return $tree;
}
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
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 13:35
 */

namespace core\lib;

class Config{

    public  $configs = [];

    /**
     * @param string $file
     * @param $name
     * @param string $path
     * @return mixed
     * @throws \Exception
     * 获取配置文件的配置项，默认配置文件目录为 模块/配置文件
     */
    public function get($name,$file='config',$path = '')
    {
        //模块下的config目录
        if(!$path)
        {
            $path = realpath(MODULE).'\\'.'config';
            if(!is_dir($path)){
                mkdir($path,0777,true);
            }
        }
        $filePath = $path.'\\'.$file.'.php';

        if(is_dir($path)){
            if(is_file($filePath)){
                $return = include $filePath;

                if(!$return[$name]){
                    throw new \Exception('没有找到该配置项');
                }else{

                    $this->configs[$name] = $return[$name];
                    return $this->configs[$name];
                }
            }else{
                throw new \Exception('没有找到配置文件');
            }
        }else{
            throw new \Exception('没有找到配置文件目录');
        }
    }

    public function all($file='config',$path=''){
        //模块下的config目录
        if(!$path)
        {
            $path = realpath(MODULE).'\\'.'config';
            if(!is_dir($path)){
                mkdir($path,0777,true);
            }
        }
        $filePath = $path.'\\'.$file.'.php';

        if(is_dir($path)){
            if(is_file($filePath)){
                $return = include $filePath;

                return $return;
            }else{
                throw new \Exception('没有找到配置文件');
            }
        }else{
            throw new \Exception('没有找到配置文件目录');
        }
    }
}
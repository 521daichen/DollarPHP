<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 16:18
 */
namespace dollarphp\lib;

class  modelPdo extends \PDO{


    public function __construct()
    {
        $temp = \dollarphp\lib\conf::all('db');
        try{
            parent::__construct($temp['DSN'], $temp['USERNAME'], $temp['PASSWD']);
        }catch (\PDOException $e){
           echo $e->getMessage();
        }
    }

}
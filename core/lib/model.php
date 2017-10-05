<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/4
 * Time: 16:18
 */
namespace core\lib;
use Medoo\Medoo;
class  model extends Medoo {

    public function __construct()
    {
        $options = conf::all('db');
        parent::__construct($options);
    }

}
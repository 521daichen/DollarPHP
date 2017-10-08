<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:57
 */

namespace dollarphp\lib;
class MySQLi implements IDatabase {
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysqli_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}
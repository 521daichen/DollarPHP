<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:57
 */

namespace core\lib;
class MySQL implements IDatabase {
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}
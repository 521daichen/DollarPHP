<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 13:57
 */

namespace dollarphp\lib;
class PDO implements IDatabase {

    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql://host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);

    }

    function close()
    {
        unset($this->conn);
    }
}
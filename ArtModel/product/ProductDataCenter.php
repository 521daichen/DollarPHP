<?php
 class  ProductDataCenter
 {
     public  static $objectList=[];//对象数组 ，保存
     public static function set($k,$v)
     {
         self::$objectList[$k]=$v;
     }
     public static function remove($k)
     {
         unset(self::$objectList[$k]);
     }
    /* public static function get($k)
     {
         return self::$objectList[$k];
     }*/
     public static function __callStatic($name, $arguments)
     {
         // TODO: Implement __callStatic() method.
         $return=[];//默认返回值
        foreach(self::$objectList as $k=>$v)
        {
            if(method_exists($v,$name))
            {
                $ret=$v->$name($arguments);
                if($ret)
                {
                    $return[]=$ret;
                }
            }

        }
          return $return;
     }

 }
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/7
 * Time: 21:26
 */
namespace dollarphp\lib;

class Orm{

    public $sql = array(
        "select"=>"select ",
        "from"=>["from ",[]] ,
        "where"=>"where "
    );

    function select()
    {
        $fields = func_get_args();
        foreach ($fields as $field) {
            //如果不是初始值 select 那么带上逗号
            $this->_add(__FUNCTION__,$field,",");
        }
        return $this;
    }

    /**
     * @param $key
     * @param $str
     * @param $spliter
     * 实现字符串累加
     */
    function _add($key,$str,$spliter = ",")
    {
        if(!$this->sql[$key]) return;


        if(is_array($this->sql[$key])){
            if(in_array($str,$this->sql[$key][1]))  //如果已经存在该项，不做任何处理
            {
                $this->sql[$key][1][] = $str;
            }
        }else{
            //如果是字符串 直接进行字符串累加
            if(trim($this->sql[$key]) != $key){
                $this->sql[$key].=$spliter;
                $this->sql[$key].=$str;
            }else{
                $this->sql[$key].=$str;
            }
        }

    }
    function where($str)
    {
        $this->_add(__FUNCTION__,$str," and ");
        return $this;
    }

    function from($tableName) //如果参数是数组，代表有多张表可能要关联
    {
        if(is_array($tableName))
        {
            if(count($tableName)<2) return;

            $tb1 = current($tableName);
            $tb2 = next($tableName);

            $tb1_key = key($tb1);
            $tb1_value = $tb1[$tb1_key];

            $tb2_key = key($tb2);
            $tb2_value = $tb2[$tb2_key];

            $this->_add(__FUNCTION__,$tb1_key);
            $this->_add(__FUNCTION__,$tb2_value);

            $whereString = ' _'.$tb1_key.'.'.$tb1_value.'='.$tb2_key.'.'.$tb2_value;
            $this->where($whereString);
        }
        else{   //字符串累加
            $this->_add(__FUNCTION__,$tableName);
        }

        return $this;
    }

    function __toString()
    {
        //return implode(array_values($this->sql),' ');
        $map = function ($items){
            if(!is_array($items)){
                return $items;
            }
            else
            {
                $res = "";
                foreach ($items[1] as $item)
                {
                    if($res !="")
                    {
                        $res.=",";
                    }else{
                        $res.=$item.' _'.$item;    //加上表别名
                    }
                }
                return $items[0].$res;
            }
        };
        $ret = array_map($map,array_values($this->sql));   //函数会返回一个新的数组，通过回调。
        return implode(array_values($ret),' ');
    }
}


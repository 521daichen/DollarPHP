<?php
require("IProduct.php");
require("ProductDataCenter.php");
class ProductFactory
{
    //商品工厂类
    static  function getProduct($type)
    {
  //      if($type=="Books") $type="Dogs";//变态需求产生

        $obj=false;
        if(!class_exists($type)) //这部分加载文件代码仅仅为了演示方便，请大家自行设置自动加载机制
        {
            require($type.".php");
        }
        switch($type)
        {
            case "Books":
                $obj=new Books();
                break;
            case "Dogs":
                $obj=new Dogs();
                break;
            case "Wines":
                $obj=new Wines();
                break;
        }
        if(is_subclass_of($obj,"IProduct"))
            ProductDataCenter::set($type,$obj);//把创建的对象塞入数据中心

    }
}
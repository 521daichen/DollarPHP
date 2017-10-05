<?php

require ("product/ProductFactory.php");

 /*$obj=ProductFactory::getProduct("Books");//通过工厂方式来获取图书类

$dogs=ProductFactory::getProduct("Dogs");


var_export($obj->getList());*/

ProductFactory::getProduct(["Books","Dogs"]);




var_export(ProductDataCenter::getList());
echo "<hr/>";
ProductDataCenter::remove("Books");
var_export(ProductDataCenter::getList());
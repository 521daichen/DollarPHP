<?php
class Books implements IProduct
{

    function getList()
    {

        return [
            ["prod_id"=>101,"prod_name"=>"java从入门到住院"],
            ["prod_id"=>102,"prod_name"=>"php从精通到放弃"],
            ["prod_id"=>103,"prod_name"=>"黑客技术从入门到入狱"],
            ["prod_id"=>104,"prod_name"=>"python光速入门"],
            ["prod_id"=>105,"prod_name"=>"三小时学会golang"],
        ];
    }

}
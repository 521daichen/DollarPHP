<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 23:06
 */
namespace app\validate;
class IndexValidate extends \GUMP{

    protected static $validator;

    function __construct($lang = 'zh-cn')
    {
        parent::__construct($lang);
    }
    static public function doValidate($data){
        self::$validator = new self();
        $data = self::$validator->sanitize($data); // You don't have to sanitize, but it's safest to do so.
        self::$validator->validation_rules(array(
            'username'    => 'required|alpha_numeric|max_len,100|min_len,6',
            'password'    => 'required|max_len,100|min_len,6',
            'email'       => 'required|valid_email',
            'gender'      => 'required|exact_len,1|contains,m f',
            'credit_card' => 'required|valid_cc'
        ));
        self::$validator->filter_rules(array(
            'username' => 'trim|sanitize_string',
            'password' => 'trim',
            'email'    => 'trim|sanitize_email',
            'gender'   => 'trim',
            'bio'	   => 'noise_words'
        ));
        $validated_data = self::$validator->run($_POST);
        if($validated_data === false) {
            echo self::$validator->get_readable_errors(true);
        } else {
            print_r($validated_data); // validation successful
        }
    }


}
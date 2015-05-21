<?php

class Val {

    function __construct() {
        
    }

    public function minlength($data, $arg)
    {
        if (strlen($data)<$arg){
            return "Your string can  only be $arg long";
        }
    }
    public function maxlength($data, $arg)
    {
        if (strlen($data)>$arg){
            return "Your string can  only be $arg long";
        }
    }
    public function digit($data)
    {
        if (ctype_digit($data)==FALSE){
            return "Your string can  only be digit";
        }
    }
}
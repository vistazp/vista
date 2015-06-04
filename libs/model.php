<?php

class Model {

    function __construct() {
        try{
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        }
        catch(Exception $e){
            return 'mazafaka';
        }
    }

}

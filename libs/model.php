<?php

class model {

    function __construct() {
        try{
        $this->db = new database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        }
        catch(Exception $e){
           return;
        }
    }

}

<?php

class auth {

    function __construct() {
        
        
    }
        
    public static function HandleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        
        if ($logged == FALSE) {
            session_destroy();
            header('location: '.URL.'login');
            //header('location: ../login');
            exit;
        }
    }

}
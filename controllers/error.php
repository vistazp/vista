<?php
class error extends controller {

    function __construct() {
        parent::__construct();
        //echo 'This is an error!';
    }        
    function index(){
        $this->view->msg = 'This page doesnt exist!';
        $this->view->titl = 'Error 404: this page doesnt exist!';
        $this->view->description = 'Error 404: this page doesnt exist!';
        $this->view->canon= 'error';
        $this->view->render('error/index');        
    }
       
    

}
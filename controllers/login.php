<?php
class login extends controller{

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $this->view->render('login/index', TRUE);        
    }
    
    function run(){
        $this->model->run();
        $this->view->notice = 'Login succses!';
    }
    
}
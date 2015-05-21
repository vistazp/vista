<?php
class Index extends Controller{

    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/default.js');
    }
    
    function index(){
//        echo 'inside index index';
        $this->view->render('index/index');        
    }    
    
    function details(){
        $this->view->render('index/index');        
    }
    
}
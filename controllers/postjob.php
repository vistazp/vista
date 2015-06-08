<?php
class Postjob extends Controller{

    function __construct() {
        parent::__construct();
        $this->view->js = array('postjob/js/default.js');
    }
    
    function index(){
//        echo 'inside index index';
        $this->view->titl='Post a new job on DotNetNow.com';
        $this->view->description='home page meta description';
        $this->view->render('postjob/index');        
    }    
    
    
    
}
<?php
class index extends controller{

    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/default.js');
    }
    
    function index(){
//        echo 'inside index index';
        $this->view->titl='WebJobNow: WEB Jobs | Best Vacancy on Web Jobs Board ';
        $this->view->description='home page meta description';
        $this->view->alllist= $this->model->postList();      
        
        $this->view->render('index/index');        
    }    
    
    function details(){
        $this->view->render('index/index');        
    }
    
}
<?php

class Jobs extends Controller {

    
    
    function __construct() {
        parent::__construct();
        
    
    }

    
            function index() {
//        echo 'inside index index';
        //$this->view->titl = 'Single Job Title';
        $this->view->render('index/index');
    }
    
        
        public function view($id) {
        
        $this->view->job = $this->model->singleJob($id);
        $this->view->titl = $this->view->job[0]['title'];
        (count($this->view->job)== 0) ? $this->view->render('index/index') : $this->view->render('jobs/index');
        
        
       
     }

}

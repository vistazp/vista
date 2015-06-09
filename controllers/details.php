<?php

class Details extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();
    
    }

    function index() {
//        echo 'inside index index';
        $this->view->titl = 'Job details page';
        $this->view->render('details/index');
    }
    
      public function edit($id) {
       $this->view->post = $this->model->postSingleList($id);  
         
       $this->view->render('details/index');
     }
}

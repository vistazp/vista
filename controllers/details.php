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
     
        public function preview() {
            $this->addStepTwo();
            header('location: '.URL.'details/view/'.$pId);
        }
         public function addStepTwo(){
            $data = array();
            
            $data['title'] = $_POST['headline'];
            $data['url'] = $_POST['url'];
            $data['company'] = $_POST['company_name'];
            $data['jobdescription'] = $_POST['description'];
            $data['type_of_position'] = $_POST['length_of_employment'];
            $data['work_hour'] = $_POST['hours'];
            $data['postid'] = $pId;
            return $this->model->addStepTwo($data);
            
    }
}

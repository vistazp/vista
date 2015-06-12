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
        
        Session::set('postId', $id);
        
        $this->view->post = $this->model->postSingleList($id);  
        $this->view->render('details/index');
        
       
     }
        
        public function preview() {
            
            $this->addStepTwo();
            header('location: '.URL.'details/view/'.$_SESSION['postId']);
        }
         public function addStepTwo(){
            $data = array();
            
            $data['postid'] = $_SESSION['postId'];
            $data['title'] = $_POST['headline'];
            $data['url'] = $_POST['url'];
            $data['company'] = $_POST['company_name'];
            $data['jobdescription'] = $_POST['description'];
            $data['type_of_position'] = $_POST['length_of_employment'];
            $data['work_hour'] = $_POST['hours'];
            
            $this->model->addStepTwo($data);
            
    }
        public function view($id) {
        
        $this->view->postPreview = $this->model->singlePostPreview($_SESSION['postId']);  
        $this->view->render('details/view');
        
       
     }

}

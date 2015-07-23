<?php

class details extends controller {

    
    
    function __construct() {
        parent::__construct();
        Auth::HandleLogin();
        require "libs/mark/michelf/markdown.inc.php";
        
        $this->view->js = array('details/js/jquery.min.js','details/js/default.js', 'details/js/jquery.fancybox-1.3.4.pack.js', 'details/js/jquery.validate.min.js', 'details/js/jquery.markitup.js','details/js/sets/markdown/set.js');
        
        $this->view->css_custom = array('details/css/skins/simple/style.css','details/js/sets/markdown/style.css');
        
    }

    
            function index() {
//        echo 'inside index index';
        $this->view->titl = 'Job details page';
        
        $this->view->canon = 'details';
        $this->view->render('error/index');
    }
    
      public function edit($id) {
        
        session::set('postId', $id);
        
        $this->view->titl = 'Post a new job on webjobnow.com';
        $this->view->canon = 'details/edit'.$id;
        
        $this->view->post = $this->model->postSingleList($id);
        (count($this->view->post)== 0) ? $this->view->render('error/index') : $this->view->render('details/edit', TRUE);
        
        
       
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
            $data['apply'] = $_POST['apply'];
            $data['type_of_position'] = $_POST['length_of_employment'];
            $data['work_hour'] = $_POST['hours'];
            
            $this->model->addStepTwo($data);
            
    }
        public function view($id) {
        
        $this->view->postPreview = $this->model->postSingleList($id);
        if (count($this->view->postPreview)> 0) $this->view->titl = $this->view->postPreview[0]['title'];
        (count($this->view->postPreview)== 0) ? header('location:' . URL . 'error') : $this->view->render('details/view', TRUE);
        
        
       
     }

}

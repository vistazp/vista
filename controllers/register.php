<?php

class Register extends Controller {

    function __construct() {
        parent::__construct();
  

        $this->view->titl = 'Registration form';
        
        $this->view->js = array('register/js/validate.js'); 
        
    }

   
    function index() {
//        echo 'inside index index';

        $this->view->render('register/index');
    }
    
    public function create() {
        $data = array();
        $data['name'] = $_POST['txtUsername'];
        $data['password'] = $_POST['txtPassword'];
        $data['email'] = $_POST['txtEmail'];
        $data['role'] = $_POST['role'];

        $this->model->create($data);
        header('location:' . URL . 'register');
    }
 
  
}

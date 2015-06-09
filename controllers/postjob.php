<?php

class Postjob extends Controller {

    function __construct() {
        parent::__construct();
        @session_start();
        $this->view->js = array('postjob/js/default.js', 'postjob/js/jquery.fancybox-1.3.4.pack.js', 'postjob/js/jquery.validate.min.js');
    }

    function index() {
//        echo 'inside index index';
        $this->view->titl = 'Post a new job on DotNetNow.com';
        $this->view->description = 'home page meta description';
        $this->view->render('postjob/index');
    }

    public function nextStep() {
        
        
        if (Session::get('loggedIn') == TRUE) 
            {
            // добавляем в бд данные из step1
            $pId = $this->addStepOne();
// запускаем контролер step2
            header('location: '.URL.'details/edit/'.$pId);
        } 
        else 
        {
            // логинимся
            $data['email']=$_POST['login'];
            $data['password']=$_POST['password'];
            
            $this->model->runReg($data['email'], Hash::create('md5', $data['password'], HASH_KEY));
            // 
            // добавляем в бд данные из step1
            $this->addStepOne();
            // запускаем контролер step2
            //header('location: '.URL.'details');
        }   
       }

    public function addStepOne(){
            $data = array();
            
            $data['title'] = $_POST['headline'];
            $data['city'] = $_POST['city'];
            $data['country'] = $_POST['country'];
            $data['telec'] = $_POST['telecomute'];
            $data['type'] = $_POST['featured_status'];
            $data['userid'] = Session::get('userId');
            return $this->model->addStepOne($data);
            
    }
}

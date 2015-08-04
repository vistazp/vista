<?php

class postjob extends controller {

    function __construct() {
        parent::__construct();
        @session_start();
        
        //$this->view->js_code = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>';
        $this->view->js = array('postjob/js/jquery.min.js','postjob/js/default.js', 'postjob/js/jquery.fancybox-1.3.4.pack.js', 'postjob/js/jquery.validate.min.js');
      }

    function index() {
//        echo 'inside index index';
        $this->view->titl = 'Post Your Web Jobs - WebJobNow';
        $this->view->description = 'Post your WEB jobs on the job board that companies trust, and directly email active Web developers today!';
        $this->view->canon = 'posjob';
        
        $this->view->render('postjob/index', TRUE);
    }

    public function nextStep() {
        
        
        if (session::get('loggedIn') == TRUE) 
            {
            // добавляем в бд данные из step1
            $pId = $this->addStepOne();
// запускаем контролер step2

            header('location: '.URL.'details/edit/'.$pId[0]['postid']);
           // print_r($pId[0]['postid']);
           // die;
        } 
        else 
        {
            // логинимся
            $data['email']=$_POST['login'];
            $data['password']=$_POST['password'];
            
            $this->model->runReg($data['email'], hash::create('md5', $data['password'], HASH_KEY));
            // 
            // добавляем в бд данные из step1
            $pId = $this->addStepOne();
            // запускаем контролер step2
            header('location: '.URL.'details/edit/'.$pId[0]['postid']);
            //print_r($pId[0]['postid']);
            //die;
        }   
       }

    public function addStepOne(){

            $data = array();
            
            $data['title'] = $_POST['headline'];
            $data['city'] = $_POST['city'];
            $data['country'] = $_POST['country'];
            $data['telec'] = $_POST['telecomute'];
            $data['type'] = $_POST['featured_status'];
            $data['userid'] = session::get('userId');
            return $this->model->addStepOne($data);
           // echo $this->model->addStepOne($data);
            
    }
}

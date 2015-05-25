<?php
class Signup extends Controller{

    function __construct() {
        parent::__construct();

        $this->view->titl='Registration';        
    
    }
    
    function index(){
        //echo Hash::create('md5', 'prof', HASH_KEY);
        $this->view->render('signup/index');        
    }
    
    public function addSubscribe()
    {
        $data = array();
        $data['email'] = $_POST['email'];
        $this->model->create($data);
        
        header('location: '.URL.'thanks/indexSubscribe');
        
    }
    
   
    
}
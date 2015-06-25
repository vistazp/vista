<?php
class help extends controller{

    function __construct() {
        parent::__construct();

        $this->view->titl='Блядский хэлп!';        
    
    }
    
    function index(){
        //echo Hash::create('md5', 'prof', HASH_KEY);
        $this->view->render('help/index');        
    }


    public function other($arg=FALSE) {
        
        require 'models/help_model.php';
        $model=new help_Model();
        $this->view->render('help/index');                
        $this->view->blah = $model->blah();
    }
    
    
    
}
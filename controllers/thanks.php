<?php
class thanks extends controller{

    function __construct() {
        parent::__construct();

        $this->view->titl='Дякуэмо';        
    
    }
    
    function index(){
        //echo Hash::create('md5', 'prof', HASH_KEY);
        
        $this->view->thanksMessage='Thanks for your feedback :)';        
        $this->view->render('thanks/index');        
        
    }

        
    public function indexSubscribe(){
        $this->view->thanksMessage='Thanks for your subscription :)';        
        $this->view->render('thanks/index');        
        
    }
    
}
<?php
class Help extends Controller{

    function __construct() {
        parent::__construct();
     //   echo 'We are in help<br />';
    $this->view->titl='Блядский хэлп!';        
    
//    $qqq='%0\\gsdg23hgsdghshdg525\dgsg34agsas62\\.235/./';
//    $qqq = filter_var($qqq, FILTER_SANITIZE_NUMBER_INT);
//    echo $qqq;
    //var_dump($qqq);
    //var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL));
    
    
    }
    
    function index(){
        //echo Hash::create('md5', 'prof', HASH_KEY);
        $this->view->render('help/index');        
    }


    public function other($arg=FALSE) {
        
        require 'models/help_model.php';
        $model=new Help_Model();
        $this->view->render('help/index');                
        $this->view->blah = $model->blah();
    }
    
    
    
}
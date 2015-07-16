<?php

class jobs extends controller {

    
    
    function __construct() {
        parent::__construct();
        require 'libs/mark/michelf/markdown.inc.php';
        
        $this->view->js_code = '        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "d1841c3c-9b1e-4cc3-a21c-26f2f40037b2", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>';
    
    }

    
            function index() {
//        echo 'inside index index';
        //$this->view->titl = 'Single Job Title';
        $this->view->render('index/index');
    }
    
        
        public function view($id) {
        
        $this->view->job = $this->model->singleJob($id);
        if (count($this->view->job)> 0) $this->view->titl = $this->view->job[0]['title'];
        (count($this->view->job)== 0) ? header('location:' . URL . 'error') : $this->view->render('jobs/index');
        
        
       
     }

}

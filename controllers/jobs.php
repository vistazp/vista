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
        $this->view->canon = 'jobs/view/'.$id;
                
        $this->view->job = $this->model->singleJob($id);
        
        
        //job[0]['title']
        
        $sendTitle=str_replace(array("'","\""), "", substr($this->view->job[0]['title'],0,70));
        
        
        
        $trimmed = trim(substr($this->view->job[0]['jobdescription'],0,180), " \t.");
        $strOutput = preg_replace("/\s+\r\n/","", $trimmed);
        $name = str_replace(array("'","\""), "", $strOutput);
        $remove = array("#", "*");
        $sendDescription = str_replace($remove, "", $name);
        
        
        
        if (count($this->view->job)> 0) $this->view->titl = $sendTitle;
        
        if (count($this->view->job)> 0) $this->view->description = $sendDescription;
        
        (count($this->view->job)== 0) ? header('location:' . URL . 'error') : $this->view->render('jobs/index', TRUE);
        
        
       
     }
        
        public function goApply($postid){
            $applyUrl = $this->model->getUrl($postid);
            $link = $applyUrl[0]['apply'];
            
            
            if ((filter_var($link, FILTER_VALIDATE_EMAIL)) == FALSE) {
            header('location:' . $link);
        } else {
            header('location:mailto:' . $link);
            };

            
            
        }

}

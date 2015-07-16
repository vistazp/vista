<?php

class test2 extends controller {

    function __construct() {
        parent::__construct();
        

        require 'libs/mark/michelf/markdown.inc.php';
        
        $this->view->titl = 'для тестирования';
        $this->view->js = array('test2/js/jquery.markitup.js','test2/js/sets/markdown/set.js');
        $this->view->css_custom = array('test2/css/skins/simple/style.css','test2/js/sets/markdown/style.css');
        
        
    }

    function index() {
//        echo 'inside index index';
        $this->out(1);
        $this->view->render('test2/index');
    }
    

    
    public function add($id) {
    //if(get_magic_quotes_runtime()){set_magic_quotes_runtime(false)}        
            $data = array();
            
            //$data['title'] = stripcslashes($_POST['title']);
            $data['title'] = $_POST['title'];
            $data['content'] = $_POST['content'];
            $data['id'] = $id;

            $this->model->add($data);        
            header('location: '.URL.'test2');
    }
public function out($id) {
    $this->view->test = $this->model->out($id);
    }

}

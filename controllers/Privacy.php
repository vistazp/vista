<?php

class Privacy extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Privacy of information';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('privacy/index');
    }

    
}

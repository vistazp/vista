<?php

class Terms extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Terms of use';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('terms/index');
    }

    
}

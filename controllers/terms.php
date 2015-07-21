<?php

class terms extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Terms of use on webjobnow.com';
        $this->view->canon = 'terms';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('terms/index');
    }

    
}

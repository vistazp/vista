<?php

class terms extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'WebJobNow usage terms page';
        $this->view->description = 'WebJobNow usage terms page lists the terms of usage of the site';
        $this->view->canon = 'terms';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('terms/index', TRUE);
    }

    
}

<?php

class privacy extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'WebJobNow privacy terms page';
        $this->view->canon = 'privacy';
        $this->view->description = 'WebJobNow privacy terms page lists the privacy policies of the site.';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('privacy/index', TRUE);
    }

    
}

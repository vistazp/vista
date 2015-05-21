<?php

class Contactus extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Contact us';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('contactus/index');
    }

    
}

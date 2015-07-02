<?php

class payment extends controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();
    }

    function index() {

        $this->view->titl = 'Select payment method';
        $this->view->render('error/index');
    }
    function view($postId) {
        $this->view->titl = 'Select payment method';
        $this->view->post = $this->model->singlePost($postId);
        $this->view->render('payment/index');
    }

}


<?php

class Subscription extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();


        $this->view->titl = 'Subscriber page';
    }

    function index() {
//        echo 'inside index index';
        $this->view->subscriptionList = $this->model->subscriptionList();
        $this->view->render('subscription/index');
    }
    
    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'subscription');
    }



}

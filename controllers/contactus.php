<?php

class contactus extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Contact us';
        $this->view->canon = 'contactus';
        $this->view->description = 'Reach out to the WebJobNow team. We are here to help you find your ideal WEB job or ideal WEB developer';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('contactus/index', 'false');
    }

    public function create() {
        $data = array();

        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['reason'] = $_POST['reason'];
        $data['comment'] = $_POST['message'];

        $this->model->create($data);


        header('location:' . URL . 'thanks');
    }

}

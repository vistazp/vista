<?php

class Contactus extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Contact us';
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

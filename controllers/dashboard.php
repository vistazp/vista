<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        
        Auth::HandleLogin();
        
        //print_r($_SESSION);
        
        $this->view->js = array('dashboard/js/default.js');
        
        $this->view->titl='Тайтл для страницы с Дашбордом';
        
    }

    function index() {
//        echo 'inside index index';
        $this->view->render('dashboard/index');
    }

    function logout() {
        Session::destroy();
        header('location: '.URL.'login');
        exit();
    }
    
    function xhrInsert()
    {
        $this->model->xhrInsert();
    }
    
    function xhrGetListing(){
        $this->model->xhrGetListing();
    }
    function xhrDeleteListing(){
        $this->model->xhrDeleteListing();
    }
    
    public function edit() {
        $this->view->user = $this->model->currentUser();
        $this->view->render('dashboard/edit');
    }
    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        $this->model->editSave($data);
        
        header('location:' . URL . 'user');
    }

}

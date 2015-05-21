<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
        
        Auth::HandleLogin();
        
        
        $this->view->titl = 'Тайтл для ' . $_SESSION['role'] . ' страницы с Дашбордом';
    }

    function index() {
//        echo 'inside index index';
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function create() {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        $this->model->create($data);
        header('location:' . URL . 'user');
    }

    public function edit($id) {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }

    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        $this->model->editSave($data);
        
        header('location:' . URL . 'user');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'user');
    }

}

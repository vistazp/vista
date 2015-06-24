<?php

class Note extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();


        $this->view->titl = 'Note для ' . $_SESSION['role']  . ' страницы с Дашбордом';
    }

    function index() {
//        echo 'inside index index';
        $this->view->noteList = $this->model->noteList($_SESSION['userId']);
        $this->view->render('note/index');
    }
    
    
    public function create() {
        $data = array();
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        
        $this->model->create($data);
        header('location:' . URL . 'note');
    }

    public function edit($id) {
        $this->view->note = $this->model->noteSingleList($id);
        $this->view->render('note/edit');
    }

    public function editSave($id) {
        $data = array();
        $data['noteid'] = $id;
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];

        $this->model->editSave($data);
        
        header('location:' . URL . 'note');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'note');
    }

}

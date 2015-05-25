<?php

class Feedback extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();


        $this->view->titl = 'Feedback page';
    }

    function index() {
//        echo 'inside index index';
        $this->view->feedList = $this->model->feedList();
        $this->view->render('feedback/index');
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

    public function view($id) {
        $this->view->feedback = $this->model->feedSingleList($id);
        $this->view->render('feedback/view');
    }

    public function editSave($id) {
        $data = array();
        $data['noteid'] = $id;
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];

        $this->model->editSave($data);
        
        header('location:' . URL . 'feedback');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'feedback');
    }

}

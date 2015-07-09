<?php

class dashboard extends controller {

    function __construct() {
        parent::__construct();
        
        auth::HandleLogin();
        
        //print_r($_SESSION);
        
        $this->view->js = array('dashboard/js/default.js');
        
        $this->view->titl='Тайтл для страницы с Дашбордом';
        
    }

    function index() {
        $this->view->userPost = $this->model->userPostList($_SESSION['userId']);
        $this->view->render('dashboard/index');
    }

    function logout() {
        session::destroy();
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
        $data['id'] = $_SESSION['userId'];
        $data['name'] = $_POST['name'];
        $data['password'] = $_POST['password'];
        session::set('userName', $_POST['name']);
        $this->model->editSave($data);
        
        header('location:' . URL . 'dashboard');
    }
    
    
    public function subVal(){
        try {
            $form = new form();
            
            $form   ->post('name')
                    ->val('minlength', 2)
                    ->val('maxlength', 20)
                    
                //    ->post('email')
                //    ->val('minlength', 5)
                //    ->val('emailCorrect')
                    
                    ->post('password')
                    ->val('minlength', 1)
                    ->val('maxlength', 20)
                    ->post2('password','passwordConfirm')
                   // ->post('password')
                    ->val('samepass', 'password', 'passwordConfirm');

            $form->mit();
            $data = $form->fetch();
            
            $this->editSave($_SESSION['userId']);
            
        }
        catch (Exception $e) {
            $str = $form->mit2();
            $this->view->ValError = $str;
            $this->edit();

        }
    }
    
    public function deletePost($id) {
        $this->model->deletePost($id);
        header('location:' . URL . 'dashboard');
    }
}

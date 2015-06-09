<?php

class Details extends Controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();


        $this->view->titl = 'Job details page';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('details/index');
    }
    
    

    public function edit($id) {
        $this->view->number = $id;
        $this->view->render('details/index');
        
        /*        $data = array();
        $data['noteid'] = $id;
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];

        $this->model->editSave($data);
        
        header('location:' . URL . 'feedback');
 * 
 */
    }
    
    
    public function view($id) {
        $this->view->feedback = $this->model->feedSingleList($id);
        $this->view->render('feedback/view');
    }



    public function delete($id) {
        $this->model->delete($id);
        header('location:' . URL . 'feedback');
    }

}

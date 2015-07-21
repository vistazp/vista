<?php

class email extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Update email preference';
        $this->view->canon = 'email';
        $this->view->description = 'Update email preference';
    }

    function index() {


        $this->view->render('email/index', 'false');
    }



        //$this->model->create($data);


        //header('location:' . URL . 'thanks');

    
        public function update() {
        try {
            $form = new form();

            $form->post('email')
                    ->val('minlength', 5)
                    ->val('subExist')
                    ->post('notify');


            $form->mit();
            $data = $form->fetch();

            $this->model->updateEmail($data);
            $this->view->ValError2 = 'Email options successfully updated!';
            header('location: '.URL.'email?email='.$data['email']);            
                      
//            $this->view->render('email/index');
            
        } catch (Exception $e) {
            $str = $form->mit2();
            $this->view->ValError = $str;
            $this->view->render('email/index');
        }
    }

}

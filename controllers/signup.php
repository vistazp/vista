<?php

class Signup extends Controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Registration';
    }

    function index() {
        //echo Hash::create('md5', 'prof', HASH_KEY);
        $this->view->render('signup/index');
    }

    public function addSubscribe() {
        $data = array();
        $data['email'] = $_POST['email'];
        $this->model->create($data);

        header('location: ' . URL . 'thanks/indexSubscribe');
    }


    
    
    public function validation() {
        try {
            $form = new Form();

            $form->post('name')
                    ->val('minlength', 5)
                    
                    ->post('email')
                    ->val('minlength', 5)
                    
                    ->post('password');

            $form->mit();
            

//            echo 'form passed!';
            $data = $form->fetch();

 //           echo '<pre>';
            //print_r($data);
   //         echo '</pre>';

            //$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
            //$db->insert('users', array(
            //        'login' => $data['login'],
            //        'email' => $data['email'],
            //        'password' => Hash::create('md5', $data['password'], HASH_KEY),
            //        'role' => 'default'));
            $this->model->addUser($data);
            
            $this->model->runReg($data['email'], Hash::create('md5', $data['password'], HASH_KEY));
            
            
        } catch (Exception $e) {
            $str = $form->mit2();
            
            //$this->view->ValError = $e->getMessage();
            $this->view->ValError = $str;
            $this->view->render('signup/index');
//            header('location: ' . URL . 'signup');
        }
    }

}

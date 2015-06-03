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

    public function addSubscribe($data) {
        //$data = array();
        //$data['email'] = $_POST['email'];
        $this->model->create($data);

        header('location: ' . URL . 'thanks/indexSubscribe');
    }

    public function subVal(){
        try {
            $form = new Form();
            
            $form   ->post('email')
                    ->val('minlength', 5)
                    ->val('emailCorrect');

            $form->mit();
            $data = $form->fetch();

            $this->addSubscribe($data);
            
        }
        catch (Exception $e) {
            //$str = $form->mit2();
            //$this->view->ValError = $str;
            header('location: ' . URL);;

        }
    }

    public function mailSuck($mail) 
    {
     
     $this->model->mailSuck($mail);   
    }
    
    
    
    public function validation() {
        try {
            $form = new Form();

            $form->post('name')
                    ->val('minlength', 2)
                    ->val('maxlength', 20)
                    
                    ->post('email')
                    ->val('minlength', 5)
                    ->val('emailCorrect')
                    
                    ->post('password')
                    ->val('minlength', 6)
                    ->val('maxlength', 20);
                            
            $form->mit();
            $data = $form->fetch();

            /*
             * наши действия если валидация успешная
             * добавляем в базу данных addUser
             * стартуем сессию и логинем юзера runReg
             * отправляем почту с уведомлением об успешной регистрации
             */
            $this->model->addUser($data);
            $this->model->runReg($data['email'], Hash::create('md5', $data['password'], HASH_KEY));
            
            $this->model->mailSuck($data['email']);
            
        } catch (Exception $e) {
            $str = $form->mit2();
            $this->view->ValError = $str;
            $this->view->render('signup/index');

        }
    }

}

<?php

class signup extends controller {

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

    public function subVal() {
        try {
            $form = new form();

            $form->post('email')
                    ->val('minlength', 5)
                    ->val('emailCorr');


            $form->mit();
            $data = $form->fetch();
            
            
            $this->addSubscribe($data);
        } catch (Exception $e) {
            //$str = $form->mit2();
            //$this->view->ValError = $str;
            header('location: ' . URL);
        }
    }

    public function mailSuck($mail) {

        $this->model->mailSuck($mail);
    }

    public function validation() {
        try {


            $form = new form();

            $form->post('name')
                    ->val('minlength', 2)
                    ->val('maxlength', 20)
                    ->post('email')
                    ->val('minlength', 5)
                    ->val('emailCorrect')
                    ->post('password')
                    ->val('minlength', 1)
                    ->val('maxlength', 20)
                    ->post2('password', 'passwordConfirm')
                    // ->post('password')
                    ->val('samepass', 'password', 'passwordConfirm')
                    ->post('chkReadTerms')
                    ->val('check', 'chkReadTerms');

            $form->mit();
            $data = $form->fetch();
            //$this->model->checkemail($data['email']);  
            /*
             * наши действия если валидация успешная
             * добавляем в базу данных addUser
             * стартуем сессию и логинем юзера runReg
             * отправляем почту с уведомлением об успешной регистрации
             */
            $this->model->addUser($data);
            $this->model->runReg($data['email'], hash::create('md5', $data['password'], HASH_KEY));

            $this->model->mailSuck($data['email']);
        } catch (Exception $e) {
            $str = $form->mit2();
            $this->view->ValError = $str;
            $this->view->render('signup/index');
        }
    }

    public function reset() {
        $this->view->titl = 'Password reset';
        $this->view->render('signup/reset');
    }

    public function password_reset() {
        // 1. валидируем емэйл
        // 2. проверяем его наличие в бд
        $email = $this->emailValidation();
        $newPassword = $this->getNewPassword($email);
        // 3. отправляем на почту новый пароль и вносим его в БД
        $this->sendNewPassword($email, $newPassword);
        
        $this->view->render('signup/reset');        
    }

    public function emailValidation() {
        try {


            $form = new form();

            $form->post('email')
                    ->val('minlength', 5)
                    ->val('emailExist');

            $form->mit();
            $data = $form->fetch();
            return $data['email'];
//            print_r($data);
//            $this->view->render('signup/reset');

        } catch (Exception $e) {
            $str = $form->mit2();
            $this->view->ValError = $str;

//            $this->view->render('signup/reset');
        }
    }
    public function getNewPassword($email){
        return $this->model->getNewPassword($email);
    }

    public function sendNewPassword($email, $newPassword){
        $this->model->sendNewPassword($email, $newPassword);
        
        
    }
  

}

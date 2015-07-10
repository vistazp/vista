<?php
class thanks extends controller{

    function __construct() {
        parent::__construct();

        $this->view->titl='Дякуэмо';        
    
    }
    
    function index(){
        //echo Hash::create('md5', 'prof', HASH_KEY);
        
        $this->view->thanksMessage='Thanks for your feedback :)';        
        $this->view->render('thanks/index');        
        
    }

        
    public function indexSubscribe(){
        $this->view->thanksMessage='Thanks for your subscription :)';        
        $this->view->render('thanks/index');        
        
    }
    public function success(){
        $this->view->thanksMessage='Your post has been paid. Thank you for posting with us.';        
        $this->view->render('thanks/index');        
        
    }
    
        public function callback() {
                
        $private_key = "HQHGNv3I91aRmEUs62j26Ubjkc9DM0b5dycWelH6";
        $r_data=$_POST['data'];
        
        $sign = base64_encode( sha1( 
            $private_key .  
            $r_data . 
            $private_key 
            , 1 ));
        
        $data = json_decode(base64_decode($_POST['data']), true);
        $postid = preg_replace('/[^0-9]/', '', $data['description']);
        
        $this->model->postPaid($postid);
        
        if ($sign==$_POST['signature']) {
        
        //if ($data['status']== 'success'){
        //if ($data['status']== 'sandbox'){

        //$this->model->postPaid($postid);
            
        //    $this->_sendNotif($postid,$data['amount']);
        //}    
            
                     
        
          
        } else {

            
            
            
        };
        
        
//        $fp = fopen("/var/www/cdwebjo14041/data/www/webjobnow.com/call.txt", "a"); // Открываем файл в режиме записи 
//        ftruncate($fp, 0);
//        $postid = filter_var($data['description'], FILTER_SANITIZE_NUMBER_INT);// Исходная строка
//        $postid = preg_replace('/[^0-9]/', '', $data['description']);// Исходная строка
//        $test = fwrite($fp, $postid); // Запись в файл
//        fclose($fp); //Закрытие файла
        
        
        
 
    }

    private function _sendNotif($postid, $money)
    {
       $to = 'uaprof@gmail.com'; 
       $subject = 'Нам оплатили ура!';
       $message = 'Оплачен пост номер: '.$postid.' на сумму '.$money.' USD!';
       
       $headers  = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
       

       mail($to, $subject, $message, $headers); 
    }
}
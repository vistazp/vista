<?php

class payment extends controller {

    function __construct() {
        parent::__construct();
        Auth::HandleLogin();
    }

    function index() {
         
        $this->view->titl = 'Select payment method';
        $this->view->render('error/index');
    }

    function view($postId) {
        $this->view->canon = 'payment';
        $this->view->titl = 'Select payment method';
        $this->view->post = $this->model->singlePost($postId);

        $micro = sprintf("%06d", (microtime(true) - floor(microtime(true))) * 1000000); // Ну раз что-то нужно добавить для полной уникализации то ..
        $number = date("YmdHis"); //Все вместе будет первой частью номера ордера
        $order_id = $number . $micro; //Будем формировать номер ордера таким образом...

        $merchant_id = 'i92703554113'; //Вписывайте сюда свой мерчант
        $signature = "HQHGNv3I91aRmEUs62j26Ubjkc9DM0b5dycWelH6"; //Сюда вносите public_key
//$desc = $_GET['desc']; //Можно так принять назначение платежа
//$order_id = $_GET['order_id']; //Можно так принять назначение платежа
        $price = $this->view->post[0]['price']; //Все что нужно скрипту - передать в него сумму (вы можете передавать все, вплоть до ордера и описания ...)
        $postToPay = $this->view->post[0]['postid'];
        $liqpay = new LiqPay($merchant_id, $signature);
        $html = $liqpay->cnb_form(array(
            'version' => '3',
            'amount' => "$price",
            'currency' => 'USD', //Можно менять  'EUR','UAH','USD','RUB','RUR'
            'description' => "Post №$postToPay", //Или изменить на $desc
            'order_id' => $order_id,
            'language' => 'en',
            'server_url' => 'http://webjobnow.com/thanks/callback',
            'result_url' => 'http://webjobnow.com/thanks/success',
            'sandbox' => '1'
        ));

        $this->view->htm = $html;
        $this->view->render('payment/index');
    }

}

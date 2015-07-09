<?php

class postjob_model extends model {

    function __construct() {
        parent::__construct();
    }
    private $_price;
    public function addStepOne($data) {

        switch ($data['type']) {
            case 'standart':
                $_price= 49;
                break;
            case 'premium':
                $_price= 99;
                break;
            case 'ultra':
               $_price= 149;
                break;
        }

        $this->db->insert('post', array(
            'title' => $data['title'],
            'city' => $data['city'],
            'country' => $data['country'],
            'telec' => $data['telec'],
            'type' => $data['type'],
            'price' => $_price,
            'date_create' => date('Y-m-d H:i:s'),
            'userid' => $data['userid']
        ));

        return $this->db->lastInsertId();
    }

    public function runReg($log, $pass) {

        $sth = $this->db->prepare("SELECT id, name, role FROM users WHERE email=:email AND password=:password");
        $sth->execute(array(
            ':email' => $log,
            ':password' => $pass
        ));

        $data = $sth->fetch();
        //print_r($data);
        //echo $data['role'];
        //die();

        $count = $sth->rowCount();

        if ($count > 0) {
            //login
            //Session::init();
            session::set('role', $data['role']);
            session::set('userId', $data['id']);
            session::set('userName', $data['name']);
            session::set('userEmail', $log);
            session::set('loggedIn', TRUE);
            //header('location: ../dashboard');
        } else {
            //error
            header('location: ../login');
        }
    }

    public function mailSuck($mail) {


        $to = $mail;

        $subject = "WebJobNow - Thank you for posting with us";

        $message = 'Thank you for your interest in using WebJobNow!

To help you craft your job post I have created a job posting how-to guide
that focusses on strategy, messaging and broadcasting best practices.
It covers:

    1. How to scope the job "Does the role make sense?"
    2. Message for impact "Will .Net developers read my post?"
    3. Source candidates "Where do they hang out?"

I developed this based of my experiences working with many well known clien
ts looking for top developer talent. Hopefully it will be of help to you.

For your reference, here are links for the :
    - Submitted job post (http://webjobnow.com/postajob) 
    - Posting managment dashboard (http://webjobnow.com/dashboard)

If you have any questions about the site, or the submission process, please
 do not hesitate to reach out. Happy developer hunting!

Best,

Jessy and the WebJobNow team

Jessy Fishman
jessy@webjobnow.com

webjobnow.com
Follow us on Twitter! @FindWebJob (http://twitter.com/FindWebJob)';

        $headers = "Content-type: text/plain; charset=UTF-8 \r\n";
        $headers .= "From: Jessy Fishman <jessy@webjobnow.com>\r\n";


        mail($to, $subject, $message, $headers);
    }

}

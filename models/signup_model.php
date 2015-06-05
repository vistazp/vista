<?php

class Signup_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function create($data) {
        $this->db->insert('subscriber', array(
            'email' => $data['email'],
            'datesub' => date('Y-m-d H:i:s'),
        ));
    }

    public function addUser($data) {
        $this->db->insert('users', array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::create('md5', $data['password'], HASH_KEY),
            'role' => 'default'
        ));
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
            Session::init();
            Session::set('role', $data['role']);
            Session::set('userId', $data['id']);
            Session::set('userName', $data['name']);
            Session::set('userEmail', $log);
            Session::set('loggedIn', TRUE);
            header('location: ../dashboard');
        } else {
            //error
            header('location: ../login');
        }
    }
    
      
    public function mailSuck($mail) {


        $to = $mail;

        $subject = "DotNetNow - Thank you for posting with us";

        $message = 'Thank you for your interest in using DotNetNow!

To help you craft your job post I have created a job posting how-to guide
that focusses on strategy, messaging and broadcasting best practices.
It covers:

    1. How to scope the job "Does the role make sense?"
    2. Message for impact "Will .Net developers read my post?"
    3. Source candidates "Where do they hang out?"

I developed this based of my experiences working with many well known clien
ts looking for top developer talent. Hopefully it will be of help to you.

For your reference, here are links for the :
    - Submitted job post (http://dotnetnow.com/postajob) 
    - Posting managment dashboard (http://dotnetnow.com/dashboard)

If you have any questions about the site, or the submission process, please
 do not hesitate to reach out. Happy developer hunting!

Best,

Jessy and the DotNetNow team

Jessy Fishman
jessy@dotnetnow.com

dotnetnow.com
Follow us on Twitter! @FindDotNetJobs (http://twitter.com/FindDotNetJobs)';

        $headers = "Content-type: text/plain; charset=UTF-8 \r\n";
        $headers .= "From: Jessy Fishman <jessy@dotnetnow.com>\r\n";
        

        mail($to, $subject, $message, $headers);
        
    }

}

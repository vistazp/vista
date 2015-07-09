<?php

class login_model extends model {

    function __construct() {
        parent:: __construct();
        //echo md5('prof');    
    }

    public function run() {

        $sth = $this->db->prepare("SELECT id, name, role FROM users WHERE email=:email AND password=:password");
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':password' => hash::create('md5', $_POST['password'], HASH_KEY)
            
        ));

        $data = $sth->fetch();
        //print_r($data);
        //echo $data['role'];
        //die();

        $count = $sth->rowCount();

        if ($count > 0) {
            //login
            session::init();
            session::set('role', $data['role']);
            session::set('userName', $data['name']);
            session::set('userId', $data['id']);
            session::set('userEmail', $_POST['email']);
            session::set('loggedIn', TRUE);
            header('location: ../dashboard');
        } else {
            //error
            header('location: ../login');
        }
    }
    
    

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


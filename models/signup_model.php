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

    
        public function runReg($log,$pass) {

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
            Session::set('loggedIn', TRUE);
            header('location: ../dashboard');
        } else {
            //error
            header('location: ../login');
        }
    }

}

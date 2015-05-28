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
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::create('md5', $data['password'], HASH_KEY),
            'role' => $data['role']
            
        ));
    }

    
    

}

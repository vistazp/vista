<?php

class Register_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function create($data) {
        $this->db->insert('userNet', array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::create('md5', $data['password'], HASH_KEY),
            'role' => 'default'
        ));
    }

    


    
}

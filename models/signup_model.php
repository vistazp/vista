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


}

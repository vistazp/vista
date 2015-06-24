<?php

class contactus_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function create($data) {
        $this->db->insert('feedback', array(
            'feedid' => $data['feedid'],
            'name' => $data['name'],
            'email' => $data['email'],
            'datefeed' => date('Y-m-d H:i:s'),
            'reason' => $data['reason'],
            'comment' => $data['comment']
        ));
    }

}

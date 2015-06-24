<?php

class email_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function updateEmail($data) {
        $dataUpdate = array('notify' => $data['notify']);

        //$this->db->update('subscriber', $dataUpdate, "`email` = {$data['email']}");
        
        $sth = $this->db->prepare('UPDATE subscriber SET notify = :notify WHERE email= :email');
        $sth->execute(array(
                            ':notify' => $data['notify'],
                            ':email' => $data['email']
            
                ));

    }
}
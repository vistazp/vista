<?php

class subscription_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function subscriptionList() {

        return $this->db->select('SELECT * FROM subscriber');
        
    }

    
    public function delete($id) {
        $this->db->delete('subscriber', "subid = '$id'");
        
    }

}

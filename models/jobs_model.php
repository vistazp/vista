<?php

class jobs_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function singleJob($id) {
        return $this->db->select('SELECT * FROM post WHERE postid = :postid ', array(':postid' => $id ));
    }


}

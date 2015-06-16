<?php

class Jobs_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function singleJob($id) {
        return $this->db->select('SELECT * FROM post WHERE postid = :postid ', array(':postid' => $id ));
    }


}

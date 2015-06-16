<?php
class Index_model extends Model{

    function __construct() {
        parent::__construct();
    }

    public function postList() {
        return $this->db->select('SELECT * FROM post WHERE published = "yes" ORDER BY date_create DESC');
   }
}
    

<?php
class Index_model extends Model{

    function __construct() {
        parent::__construct();
    }

    public function postList() {
        return $this->db->select('select *, if (type = "standart", (TO_DAYS(CURRENT_TIMESTAMP())-TO_DAYS(date_pablish))*24*360+TIME_TO_SEC(CURRENT_TIMESTAMP())-TIME_TO_SEC(date_pablish), ((TO_DAYS(CURRENT_TIMESTAMP())-TO_DAYS(date_pablish))*24*360+TIME_TO_SEC(CURRENT_TIMESTAMP())-TIME_TO_SEC(date_pablish))-604800 ) as t2 from post where published="yes" order by t2;');
   }
}
    

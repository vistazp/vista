<?php
class index_model extends model{

    function __construct() {
        parent::__construct();
    }

    public function postList() {
        return $this->db->select('select *, if (type = "standart", (TO_DAYS(CURRENT_TIMESTAMP())-TO_DAYS(date_pablish))*24*3600+TIME_TO_SEC(CURRENT_TIMESTAMP())-TIME_TO_SEC(date_pablish), ((TO_DAYS(CURRENT_TIMESTAMP())-TO_DAYS(date_pablish))*24*3600+TIME_TO_SEC(CURRENT_TIMESTAMP())-TIME_TO_SEC(date_pablish))-604800 ) as t2 from post where published="yes" and TO_DAYS(CURRENT_TIMESTAMP())-TO_DAYS(date_pablish)<46 order by t2;');
   }
}
    

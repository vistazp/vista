<?php
class thanks_model extends model{

    function __construct() {
        parent::__construct();
    }
    
    public function postPaid($postid){

            $postData = array(
            'paid' => 'yes'
            
                    );

        $this->db->update('post', $postData, "`postid` = {$postid}");

        
        
    }
}
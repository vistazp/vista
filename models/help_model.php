<?php
class help_model extends model{

    function __construct() {
        parent::__construct();
    }
    
    public function postPaid($postid){
        //$postData=array('paid' => 'yes');
        //$this->db->update('post', $postData, "`postid` = {$postid}");            

        //$dataUpdate = array('paid' => 'yes');
        //$sth = $this->db->prepare('UPDATE post SET paid = :paid WHERE postid = :postid');
        //$sth->execute(array(':paid' => 'yes',
        //                    ':postid' => $postid
        //  ));
        
            $postData = array(
            'paid' => 'yes'
            
                    );

        $this->db->update('post', $postData, "`postid` = {$postid}");

        
        
    }
}
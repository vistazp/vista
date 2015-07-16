<?php

class test2_model extends model {

    function __construct() {
        parent::__construct();
    }


    public function add($data) {
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content']
            );

        $this->db->update('test', $postData, 
                "`id` = {$data['id']}");        
    }

    public function out($id) {
return $this->db->select('SELECT * FROM test WHERE id= :id ', array(':id' => $id));
          

    }

 

}

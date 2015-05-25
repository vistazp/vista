<?php

class Feedback_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function feedList() {

        return $this->db->select('SELECT * FROM feedback');
        
    }

    public function feedSingleList($id) {
        return $this->db->select('SELECT * FROM feedback WHERE feedid= :feedid', array(':feedid' => $id));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
    }

    public function create($data) {
        $this->db->insert('feedback', array(
            'feedid' => $data['feedid'],
            'name' => $data['name'],
            'email' => $data['email'],
            'datefeed' => date('Y-m-d H:i:s'),
            'reason' => $data['reason'],
            'comment' => $data['comment']
            
        ));
    }

    public function editSave($data) {

        $postData = array(
            'feedid' => $data['feedid'],
            'name' => $data['name'],
            'email' => $data['email'],
            'datefeed' => date('Y-m-d H:i:s'),
            'reason' => $data['reason'],
            'comment' => $data['comment']
                );

        $this->db->update('feedback', $postData, 
                "`feedid` = {$data['feedid']}");

    }

    public function delete($id) {
        $this->db->delete('feedback', "feedid = '$id'");
        
    }

}

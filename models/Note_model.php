<?php

class Note_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function noteList($userid) {

        return $this->db->select('SELECT * FROM note WHERE userid= :id', array(':id' => $userid));
        
    }

    public function noteSingleList($id) {
        return $this->db->select('SELECT * FROM note WHERE noteid= :noteid AND userid = :userid', array(':noteid' => $id, 'userid' => $_SESSION['userId']));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
    }

    public function create($data) {
        $this->db->insert('note', array(
            'title' => $data['title'],
            'userid' => $_SESSION['userId'],
            'date_added' => date('Y-m-d H:i:s'),
            'content' => $data['content']
            
        ));
    }

    public function editSave($data) {

        $postData = array(
            'title' => $data['title'],
            'userid' => $_SESSION['userId'],
            'date_added' => date('Y-m-d H:i:s'),
            'content' => $data['content']
                );

        $this->db->update('note', $postData, 
                "`noteid` = {$data['noteid']}");

    }

    public function delete($id) {
        $this->db->delete('note', "noteid = '$id'");
    }

}

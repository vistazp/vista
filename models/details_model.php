<?php

class Details_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function postSingleList($id) {
        return $this->db->select('SELECT * FROM post WHERE postid= :postid', array(':postid' => $id));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
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

        $this->db->update('post', $postData, 
                "`postid` = {$data['postid']}");
    }

  }

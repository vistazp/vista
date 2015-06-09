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
    public function addStepTwo($data) {

        $postData = array(
            
            'title' => $data['title'],
            'url' => $data['url'],
            'company' => $data['company'],
            'jobdescription' => $data['jobdescription'],
            'type_of_position' => $data['type_of_position'],
            'work_hour' => $data['work_hour']
            
            );

        $this->db->update('post', $postData, 
                "`postid` = {$data['postid']}");
    }

  }

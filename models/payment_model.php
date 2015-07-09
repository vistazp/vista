<?php

class payment_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function singlePost($id) {
        return $this->db->select('SELECT title, type, price, postid FROM post WHERE postid = :postid and userid= :userid', array(':postid' => $id,
                                                                                                        ':userid' => $_SESSION['userId']    ));
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

        $this->db->update('post', $postData, "`postid` = {$data['postid']}");
    }

}

<?php

class Feedback_model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function feedList() {

        return $this->db->select('SELECT * FROM feedback');
    }

    public function payedList() {

        return $this->db->select('SELECT * FROM post WHERE paid= :paid', array(':paid' => 'yes'));
    }
     public function subList() {

        return $this->db->select('SELECT * FROM subscriber');
    }

    public function sitemapList() {
        return $this->db->select('SELECT postid, date_create FROM post WHERE published= :published', array(':published' => 'yes'));
    }

    public function feedSingleList($id) {
        return $this->db->select('SELECT * FROM feedback WHERE feedid= :feedid', array(':feedid' => $id));
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

        $this->db->update('feedback', $postData, "`feedid` = {$data['feedid']}");
    }

    public function delete($id) {
        $this->db->delete('feedback', "feedid = '$id'");
    }
    
    public function deleteSub($id) {
        $this->db->delete('subscriber', "subid = '$id'");
    }

    public function publishPost($postid) {
        $curPost = $this->db->select('SELECT * FROM post WHERE postid= :postid', array(':postid' => $postid));

        //print_r($curPost);
        //echo $curPost[0]['published'];
        //die;

        if ($curPost[0]['published'] == 'yes') {
            $postData=array(
                    'published' => 'no',
                    'date_pablish' => date('Y-m-d H:i:s')
                
            );
            
            
        } else {
            
            $postData=array(
                    'published' => 'yes',
                    'date_pablish' => date('Y-m-d H:i:s')
                );
            
        };
        
        $this->db->update('post', $postData, "`postid` = {$postid}");            
    }

}

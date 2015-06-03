<?php

class Dashboard_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        $text = $_POST['text'];
        
        $this->db->insert('data',array('text' => $text));
        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    function xhrGetListing() {
        $data=$this->db->select("SELECT * FROM data");
        echo json_encode($data);
    }

    function xhrDeleteListing() {
        
        $id = (int) $_POST['id'];
        $this->db->delete('data',"id = '$id'");
        echo json_encode(1);
    }

    public function currentUser() {
        return $this->db->select('SELECT id, name, email FROM users WHERE id= :id', array(':id' => $_SESSION['userId']));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
    }
       public function editSave($data) {

        $postData = array(
            'name' => $data['name'],
            'password' => Hash::create('md5', $data['password'], HASH_KEY));

        $this->db->update('users', $postData, "`id` = {$data['id']}");
       }
}

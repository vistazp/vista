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
    
public function sendMailEachPost($postid){

    $postData = $this->db->select('SELECT * FROM post WHERE postid= :postid', array(':postid' => $postid));
    
    $mailList = $this->db->select('SELECT email FROM subscriber WHERE notify= :notify', array(':notify' => '1'));
    
//    print_r($postData);
//    die;
    
// несколько получателей
$to  = 'aidan@example.com' . ', '; // обратите внимание на запятую
$to .= 'wez@example.com';

// тема письма
$subject = 'Dotnetnow Jobs: .NET Developer';

// текст письма
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';


// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Дополнительные заголовки

$headers .= 'From: DotNetNow <no-reply@dotnetnow.com>' . "\r\n";

// Отправляем
    foreach ($mailList as $key=>$value)    {        
    
        mail($value['email'], $subject, $message, $headers);    
         
        
    }
die;    

}


}

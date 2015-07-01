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
            $this->sendMailEachPost($postid);
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

foreach ($mailList as $key=>$value)    {   
// текст письма
$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Dotnetnow.com</title>
    </head>
    <body>
        <div style="margin-left: auto; margin-right: auto; padding: 30px; color:#666; text-align:left; min-width:628px;">
            <table width="608" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align:left; font-family: "Helvetica Neue", helvetica, arial, sans-serif;">
                <tr>
                    <td colspan="2"><img src="http://dotnetnow.com/public/images/logo.png" height="80" alt="DotNetNow" style="border: 0;" /></td>
                    <td align="right">
                        <p><span>Click to <a href="http://dotnetnow.com/email?email='.$value['email'].'">
                                    Update email settings</a> and</span><br/>
                            <span>change email delivery frequency.</span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">

                        <hr/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <br/>
                        <h3>New job posted on dotnetnow.com</h3>
                        <div>
                            <h3 style="margin-bottom:1px;"><a href="http://dotnetnow.com/jobs/view/'.$postData[0]['postid'].'" style="color:#DA7B32;">'.$postData[0]['title'].'</a> </h3>
                            <span style="color:gray;font-size:14px">'.$postData[0]['company'].' ('.$postData[0]['city'].', '.$postData[0]['country'].')</span>
                            <p style="margin-top:4px;">
                            
                            '.nl2br(strip_tags($postData[0]['jobdescription'], '<b> <a>')).'
                            </p>

                            (<a href="http://dotnetnow.com/jobs/view/'.$postData[0]['postid'].'">Click for full details ...</a>)
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr/>
                        Follow us on Twitter for more jobs: <a href="https://twitter.com/FindDotNetJobs">@FindTechJobs</a>
                        <br/>
                        <hr/>
                        <p>Click for delivery options: <a href="http://dotnetnow.com/email?email='.$value['email'].'">update email settings</a></p>
                        <p>To be removed from this list, <a href="http://dotnetnow.com/email?email='.$value['email'].'">click here</a></p>

                    </td>
                </tr>
            </table>
        </div>
        
    </body>
</html>
';


// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Дополнительные заголовки

$headers .= 'From: DotNetNow <no-reply@dotnetnow.com>' . "\r\n";

// Отправляем
     
    
        mail($value['email'], $subject, $message, $headers);    
         
        
    }


}


}

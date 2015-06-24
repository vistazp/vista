<?php

class val extends model {

    function __construct() {
        parent::__construct();
        
    }

    public function minlength($data, $arg) {
        if (strlen($data) < $arg) {
            return "Your string can  only be $arg long";
        }
    }

    public function maxlength($data, $arg) {
        if (strlen($data) > $arg) {
            return "Your string can  only be $arg long";
        }
    }

    public function digit($data) {
        if (ctype_digit($data) == FALSE) {
            return "Your string can  only be digit";
        }
    }

    public function samepass($pass1, $pass2) {
        if ($pass1 != $pass2) {
            //   echo $pass1;
            //   echo $pass2;
            return "Your passwords can only be the same";
        }
    }

    public function check($check) {
        if (!$check) {
            return "Please read Terms for Use and Privacy Policy";
        }
    }

        public function emailCorr($email_a) {
        if ((filter_var($email_a, FILTER_VALIDATE_EMAIL)) == FALSE) {
            return "Your email '<b>$email_a</b>' is not correct ";
        }
        }
    
    public function emailCorrect($email_a) {
        if ((filter_var($email_a, FILTER_VALIDATE_EMAIL)) == FALSE) {
            return "Your email '<b>$email_a</b>' is not correct ";
        }

        $sth = $this->db->prepare("SELECT id, name, role FROM users WHERE email=:email");
        $sth->execute(array(
            ':email' => $email_a
        ));

        $data = $sth->fetch();
        //print_r($data);
        //echo $data['role'];
        //die();

        $count = $sth->rowCount();

        if ($count > 0) {
            return "User email already exist";
        }
    }

    public function emailExist($email_a) {
        if ((filter_var($email_a, FILTER_VALIDATE_EMAIL)) == FALSE) {
            return "Your email <b>$email_a</b> is not correct";
        }

        $sth = $this->db->prepare("SELECT id, name, role FROM users WHERE email=:email");
        $sth->execute(array(
            ':email' => $email_a
        ));

        $data = $sth->fetch();

        $count = $sth->rowCount();

        if ($count == 0) {
            return "User <b>$email_a</b> doesn't exist";
        }
    }
    public function subExist($email_a) {
        if ((filter_var($email_a, FILTER_VALIDATE_EMAIL)) == FALSE) {
            return "Your email <b>$email_a</b> is not correct";
        }

        $sth = $this->db->prepare("SELECT * FROM subscriber WHERE email=:email");
        $sth->execute(array(
            ':email' => $email_a
        ));

        $data = $sth->fetch();

        $count = $sth->rowCount();

        if ($count == 0) {
            return "Subscriber <b>$email_a</b> doesn't exist";
        }
    }

}

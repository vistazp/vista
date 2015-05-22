<?php

// load error handler and database configuration
//require_once ('config.php');
// Class supports AJAX and PHP web form validation 
class Validate {

    // stored database connection
    //private $mMysqli;
    // constructor opens database connection
    function __construct() {
//$this->mMysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
         
    }

    // destructor closes database connection
    function __destruct() {
        //$this->mMysqli->close();      
    }

    
    // supports AJAX validation, verifies a single value
    public function ValidateAJAX($inputValue, $fieldID) {
        // check which field is being validated and perform validation
        switch ($fieldID) {
            // Check if the username is valid
            case 'txtUsername':
                return $this->validateUserName($inputValue);
                break;

            // Check if the name is valid
            case 'txtPassword':
                return $this->validatePassword($inputValue);
                break;

            // Check if email is valid 
            case 'txtEmail':
                return $this->validateEmail($inputValue);
                break;


            // Check if "I have read the terms" checkbox has been checked
            case 'chkReadTerms':
                return $this->validateReadTerms($inputValue);
                break;
        }
    }
    
       // validates all form fields on form submit
    public function ValidatePHP() {
        // error flag, becomes 1 when errors are found.
        $errorsExist = 0;
        // clears the errors session flag    
        if (isset($_SESSION['errors']))
            unset($_SESSION['errors']);
        // By default all fields are considered valid
        $_SESSION['errors']['txtUsername'] = 'hidden';
        $_SESSION['errors']['txtPassword'] = 'hidden';
        $_SESSION['errors']['txtEmail'] = 'hidden';
        $_SESSION['errors']['chkReadTerms'] = 'hidden';

        // Validate username
        if (!$this->validateUserName($_POST['txtUsername'])) {
            $_SESSION['errors']['txtUsername'] = 'error';
            $errorsExist = 1;
        }

        // Validate name
        if (!$this->validatePassword($_POST['txtPassword'])) {
            $_SESSION['errors']['txtPassword'] = 'error';
            $errorsExist = 1;
        }

        // Validate email
        if (!$this->validateEmail($_POST['txtEmail'])) {
            $_SESSION['errors']['txtEmail'] = 'error';
            $errorsExist = 1;
        }


        // Validate read terms
        if (!isset($_POST['chkReadTerms']) ||
                !$this->validateReadTerms($_POST['chkReadTerms'])) {
            $_SESSION['errors']['chkReadTerms'] = 'error';
            $_SESSION['values']['chkReadTerms'] = '';
            $errorsExist = 1;
        }

        // If no errors are found, point to a successful validation page
        if ($errorsExist == 0) {
            return 'allok.php';
        } else {
            // If errors are found, save current user input
            foreach ($_POST as $key => $value) {
                $_SESSION['values'][$key] = $_POST[$key];
            }
            return 'index.php';
        }
    }

    // validate user name (must be empty, and must not be already registered)
    private function validateUserName($value) {
        // trim and escape input value    
        $value = $this->mMysqli->real_escape_string(trim($value));
        // empty user name is not valid
        if ($value == null)
            return 0; // not valid
            
// check if the username exists in the database
        $query = $this->mMysqli->query('SELECT user_name FROM users ' .
                'WHERE user_name="' . $value . '"');
        if ($this->mMysqli->affected_rows > 0)
            return '0'; // not valid
        else
            return '1'; // valid
    }

    // validate name

    private function validatePassword($value) {
        // trim and escape input value    
        $value = trim($value);
        // empty user name is not valid
        if ($value)
            return 1; // valid
        else
            return 0; // not valid
    }

    
    // validate email
    private function validateEmail($value) {
        // valid email formats: *@*.*, *@*.*.*, *.*@*.*, *.*@*.*.*)
        return (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $value)) ? 0 : 1;
    }



    // check the user has read the terms of use
    private function validateReadTerms($value) {
        // valid value is 'true'

        return ($value == 'true' || $value == 'on') ? 1 : 0;
    }

}

?>

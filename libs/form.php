<?php
error_reporting(E_ALL & ~E_NOTICE);
require 'form/val.php';

class form {
    //public $strError = null;
    private $_postData = array();
    private $_currentItem = null;
    private $_val = array();
    private $_error = array();

    function __construct() {
        $this->_val = new val();
    }

    public function post($field) {
        $this->_postData[$field] = $_POST[$field];
            
        $this->_currentItem = $field;
        return $this;
    }
    
     public function post2($field, $field2) {
        $this->_postData[$field] = $_POST[$field];
        $this->_postData[$field2] = $_POST[$field2];
            
        $this->_currentItem = $field;
        $this->_currentItem2 = $field2;
        
       // echo $field;
        //echo $field2;
        return $this;
    }

    public function fetch($fieldName = FALSE) {
        if ($fieldName) {
            if (isset($this->_postData[$fieldName]))
                return $this->_postData[$fieldName];
            else
                return false;
        }
        else {
            return $this->_postData;
        }
    }

    public function val($typeOfValidator, $arg = NULL, $arg2 = NULL) {

           if ($arg == null)
            {
            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
            }
            else {
              if ($arg2 == null)
              {
               $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);
              }
              else {
                $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $this->_postData[$this->_currentItem2], $arg, $arg2); 
                } 
             }
       
        
        if ($error) {
            $this->_error[$this->_currentItem] = $error;
        }

        return $this;
    }

    public function mit() {
        if (empty($this->_error))
        {
            
            return true;
            
        } else 
            {
            $str='';
            foreach ($this->_error as $key => $value)
            {
                
                //$str .= $key.' => '.$value."\n".'</br>';
                $str .= $value."\n".'</br>';
                
                
            }
            
            throw new Exception();
            }
    }
    public function mit2() {
            $str='';
            foreach ($this->_error as $key => $value)
            {
                
                //$str .='<li>'. $key.' => '.$value."\n".'</li>';
                $str .='<li>'.$value."\n".'</li>';
                           
            }
            return $str;
            
    }
    
    

}

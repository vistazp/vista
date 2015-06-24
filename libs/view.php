<?php
class view {

    function __construct() {
        //echo 'This is a view';
    }
    public function render($name, $noInclude=FALSE){
        if ($noInclude==TRUE){
        require 'views/headerNoSubscribe.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
        }
        else {
        require 'views/header.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
        }
    }

}
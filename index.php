<?php

require 'config/path.php';
require 'config/constants.php';
require 'config/database.php';




require 'util/auth.php';

function __autoload($class){
    require "libs/$class.php";
}

//require 'libs/bootstrap.php';
//require 'libs/controller.php';
//require 'libs/model.php';
//require 'libs/view.php';

//require 'libs/database.php';
//require 'libs/session.php';
//require 'libs/hash.php';

$app = new bootstrap(); 

<?php

require 'config/path.php';
require 'config/constants.php';
require 'config/database.php';
echo '12345';
echo 'vetal';
echo '123456';
echo 'prof';



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

$app = new Bootstrap(); 

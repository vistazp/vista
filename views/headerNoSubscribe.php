<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="author" content="dotnetnow.com" />
        <link rel="canonical" href="http://dotnetnow.com/" />
        <title><?= (isset($this->titl)) ? $this->titl : 'Test'; ?></title>
        <meta name="description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>"/>


        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

            <link rel="stylesheet" href="<?php echo URL; ?>public/css/application.css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/screen.css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/formtastic.css" media="screen" rel="stylesheet" type="text/css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
            <?php
            if (isset($this->js)) {
                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
                }
            }
            ?>
    </head>

    <?php Session::init(); ?>

    <body>        

        <div class="container">
            <div id="header" class="span-24">
                <div id="logo" class="span-7">
                    <a href="http://dotnetnow.com/"><h1>DotNetnow: Ruby Jobs | Niche Ruby on Rails Jobs Board</h1></a>
                </div>


                <div id="navigation" class="span-17 last">
                    <div id="top-nav" class="span-17 last">
                        <a href="<?php echo URL; ?>index">Home</a> |
                        <a href="<?php echo URL; ?>note">Post a job</a> |
                        <a href="<?php echo URL; ?>help">Help</a> |
                        <?php if (Session::get('loggedIn') == FALSE): ?>
                        <a href="<?php echo URL; ?>signup">Sign Up</a> |
                        <?php endif; ?>                               
                        
                        
                        <?php if (Session::get('loggedIn') == TRUE): ?>
                            <a href="<?php echo URL; ?>dashboard">Account</a> |
                            
                        <?php endif; ?>                               

                        <?php if (Session::get('loggedIn') == FALSE): ?>
                            <a href="<?php echo URL; ?>login">Login</a>
                        <?php else: ?>   
                                <?php if (Session::get('role') == 'owner'): ?>
                                    <a href="<?php echo URL; ?>user">Users</a> |
                                    <a href="<?php echo URL; ?>feedback">Feedback</a> |
                                <?php endif; ?>   
                            
                            <a href="<?php echo URL; ?>dashboard/logout">Logout</a>

                            
                        <?php endif; ?>                               

                    </div>


                </div>


            </div>
            <hr />
            <div id="content">

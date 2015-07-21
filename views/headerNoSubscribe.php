<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="author" content="webjobnow.com" />
        <link rel="canonical" href="<?php echo URL; ?><?= (isset($this->canon)) ? $this->canon : ''; ?>" />
        <title><?= (isset($this->titl)) ? $this->titl : 'Test'; ?></title>
        <meta name="description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>public/images/favicon.ico" />

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

            <link rel="stylesheet" href="<?php echo URL; ?>public/css/application.css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/screen.css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/formtastic.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/error.css" media="screen" rel="stylesheet" type="text/css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 <!--twitter js-->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            
            <?php
            if (isset($this->js)) {
                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
                }
            }
            ?>
    </head>

    <?php session::init(); ?>

    <body>        

        <div class="container">
            <div id="header" class="span-24">
                <div id="logo" class="span-7">
                    <a href="http://webjobnow.com/"><h1>WebJobNow: WEB Jobs | Web Jobs Developer Board</h1></a>
                </div>


                <div id="navigation" class="span-17 last">
                    <div id="top-nav" class="span-17 last">
                        <a href="<?php echo URL; ?>">Home</a> |
                        <a href="<?php echo URL; ?>postjob">Post a job</a> |
                        <a href="http://feeds.feedburner.com/WebJobBoard" class="rss">RSS</a> |
                        <?php if (session::get('loggedIn') == FALSE): ?>
                        <a href="<?php echo URL; ?>signup">Sign Up</a> |
                        <?php endif; ?>                               
                        
                        
                        <?php if (session::get('loggedIn') == TRUE): ?>
                            <a href="<?php echo URL; ?>dashboard">Account</a> |
                            
                        <?php endif; ?>                               

                        <?php if (session::get('loggedIn') == FALSE): ?>
                            <a href="<?php echo URL; ?>login">Login</a>
                        <?php else: ?>   
                                <?php if (session::get('role') == 'owner'): ?>
                                    <a href="<?php echo URL; ?>user">Users</a> |
                                    <a href="<?php echo URL; ?>feedback">Feedback</a> |
                                    <a href="<?php echo URL; ?>subscription">Subscription</a> |                                    
                                <?php endif; ?>   
                            
                            <a href="<?php echo URL; ?>dashboard/logout">Logout</a>

                            
                        <?php endif; ?>                               

                    </div>


                </div>


            </div>
            <hr />
            <div id="content span-24">

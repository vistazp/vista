<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="author" content="dotnetnow.com" />
        <link rel="canonical" href="http://dotnetnow.com/" />
        <title><?= (isset($this->titl)) ? $this->titl : 'Test'; ?></title>
        <meta name="description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>public/images/favicon.ico" />

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

            <link rel="stylesheet" href="<?php echo URL; ?>public/css/application.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/screen.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/formtastic.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="<?php echo URL; ?>public/css/error.css" media="screen" rel="stylesheet" type="text/css"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

            <?php
            if (isset($this->js)) {
                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
                }
            }
            ?>
            <?php 
            if (isset($this->js_code))
                
                echo $this->js_code;
            
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
                        <a href="<?php echo URL; ?>">Home</a> |
                        <a href="<?php echo URL; ?>postjob">Post a job</a> |
                        <a href="http://feeds.feedburner.com/dotnetnow" class="rss">RSS</a> |
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
                                    <a href="<?php echo URL; ?>subscription">Subscription</a> |
                                <?php endif; ?>   
                            
                            <a href="<?php echo URL; ?>dashboard/logout">Logout</a>

                            
                        <?php endif; ?>                               

                    </div>

                    <div id="subscribe" class="span-17 prepend-0 last">
                        <div class="span-11 prepend-4 last">
                            <div class="span-11">
                                <div class="span-6"><h2>.Net Job Alerts</h2></div>
                                <div class="span-4" id="twitter-div"><a href="https://twitter.com/FindDotNetJobs" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @FindDotNetJobs</a></div>
                            </div>
                            <div class="span-11">
                                <div class="quiet" style="font-size:1.25em;">
                                    Latest .Net jobs posted from London, Berlin, California, and the world, sent to your inbox (digest options available).
                                </div>
                                <div class="inline">
                                    <span style='font-size:16px;'>Email :</span> 
                                    <form accept-charset="UTF-8" action="<?php echo URL; ?>signup/subVal" class="inline" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="XsTD3UQWKWtrQ3wMTCY0wOneAfWepo+Ej0v9dGo8W/g=" /></div>
                                        <input id="update_email" name="email" size="30" type="text" />
                                        <input class="button-green inline" name="commit" type="submit" value="Get Job Alerts" />
                                    </form>          
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <hr />
            <div id="content span-24" >
            

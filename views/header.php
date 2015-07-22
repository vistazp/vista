<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="author" content="webjobnow.com" />
        <link rel="canonical" href="<?php echo URL; ?><?= (isset($this->canon)) ? $this->canon : ''; ?>" />
        <title><?= (isset($this->titl)) ? $this->titl : 'Webjobnow: best jobs board on WEB'; ?></title>
        <meta name="description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>public/images/favicon.ico" />
        <meta name="rating" content="general" />
        <meta name="language" content="en-us" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"/>

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/application.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/screen.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/formtastic.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery.fancybox-1.3.4.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/error.css" media="screen" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
         <!--twitter js-->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
        <?php
        if (isset($this->css_custom)) {
            foreach ($this->css_custom as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . ' "media="screen" type="text/css"/>';
            }
        }
        ?>
        <?php if (isset($this->js_code)) echo $this->js_code; ?>
    <link rel="alternate" href="http://feeds.feedburner.com/webjobboard" title="Web Job Board: webjobnow.com" type="application/rss+xml"/>    
    </head>
    <?php session::init(); ?>
    <body>        
        <div class="container">
            <div id="header" class="span-24">
                <div id="logo" class="span-7">
                    <a href="http://webjobnow.com/"></a>
                </div>
                <div id="navigation" class="span-17 last">
                    <div id="top-nav" class="span-17 last">
                        <a href="<?php echo URL; ?>">Home</a> |
                        <a href="<?php echo URL; ?>postjob">Post a job</a> |
                        <a href="http://feeds.feedburner.com/webjobboard" class="rss">RSS</a> |
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
                    <div id="subscribe" class="span-17 prepend-0 last">
                        <div class="span-11 prepend-4 last">
                            <div class="span-11">
                                <div class="span-6"><h2>WEB Job Alerts</h2></div>
                                <div class="span-4" id="twitter-div"><a href="https://twitter.com/FindDotNetJobs" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @FindDotNetJobs</a></div>
                            </div>
                            <div class="span-11">
                                <div class="quiet" style="font-size:1.25em;">
                                    Latest WEB jobs posted from London, Berlin, California, and the world, sent to your inbox (digest options available).
                                </div>
                                <div class="inline">
                                    <span style='font-size:16px;'>Email :</span> 
                                    <form accept-charset="UTF-8" action="<?php echo URL; ?>signup/subVal" class="inline" method="post">
                                        <input id="update_email" name="email" size="30" type="text" />
                                        <input class="newbutton inline" name="commit" type="submit" value="Get Job Alerts" />
                                    </form>          
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            


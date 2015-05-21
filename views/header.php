<!doctype html>
<html>
    <head>
        <title>
            <?=(isset($this->titl)) ? $this->titl : 'Test'; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default1.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL .'views/'.$js . '"></script>';
            }
        }
        ?>
    </head>

    <?php Session::init(); ?>

    <body>        
        <div id="header">
            
            <br />
            <?php if (Session::get('loggedIn') == FALSE): ?>
            
            <a href="<?php echo URL; ?>index">Index</a>
            <a href="<?php echo URL; ?>help">Help</a>
            <?php endif; ?>   
            <?php if (Session::get('loggedIn') == TRUE): ?>
                <a href="<?php echo URL; ?>dashboard">Dashboard</a>
                <a href="<?php echo URL; ?>note">Note</a>
                
                <?php if (Session::get('role') == 'owner'): ?>
                <a href="<?php echo URL; ?>user">Users</a>
                <?php endif; ?>   
                
                <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php else: ?>   
                <a href="<?php echo URL; ?>login">Login</a>
            <?php endif; ?>   
        </div>
        <div id="content">

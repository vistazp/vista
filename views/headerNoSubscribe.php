<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="author" content="webjobnow.com" />
        <link rel="canonical" href="<?php echo URL; ?><?= (isset($this->canon)) ? $this->canon : ''; ?>" />
        <title><?= (isset($this->titl)) ? $this->titl : 'Webjobnow: best jobs board on WEB'; ?></title>
        <meta name="description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>public/images/favicon.ico" />
        <meta name="rating" content="general" />
        <meta name="language" content="en-us" />
        
        <meta name="og:title" content="<?= (isset($this->titl)) ? $this->titl : 'Webjobnow: best jobs board on WEB'; ?>" />
        <meta name="og:type" content="website" />
        <meta name="og:description" content="<?= (isset($this->description)) ? $this->description : 'Page description'; ?>" />
        
        <meta name="og:url" content="<?php echo URL; ?><?= (isset($this->canon)) ? $this->canon : ''; ?>" />
        <meta name="og:image" content="<?php echo URL; ?>public/images/logowebjobkv.png" />
        <meta name="og:site_name" content="Webjobnow.com: WEB jobs board" />

        
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/application.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/screen.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/formtastic.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery.fancybox-1.3.4.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/error.css" media="screen" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/media.css" media="screen" type="text/css"/>
        
         <!--twitter js-->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        

        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
                echo "\r\n";
            }
        }
        ?>
        <?php
        if (isset($this->css_custom)) {
            foreach ($this->css_custom as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . ' "media="screen" type="text/css"/>';
                echo "\r\n";
            }
        }
        ?>
        <?php if (isset($this->js_code)) echo $this->js_code; ?>
        
        <link rel="alternate" href="http://feeds.feedburner.com/webjobnow" title="Web Job Board: webjobnow.com" type="application/rss+xml" /> 
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65525272-1', 'auto');
  ga('send', 'pageview');

</script>
        <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31600563 = new Ya.Metrika({ id:31600563, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/31600563" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
        
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
                        <a href="http://feeds.feedburner.com/webjobnow" class="rss">RSS</a> |
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
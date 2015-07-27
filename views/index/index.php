      <div id="content" class="span-24">
        <div id="intro-box" class="span-24">
            <div id="intro" class="span-11 colborder">
		

		<div class="quiet" style="font-size:1.25em;">
                    <a href="https://www.google.com/about/careers/" ><img src="<?php echo URL; ?>public/images/main/google.jpg" alt="Find your job in Google" /></a>
		</div>
	</div>
	<div id="needadev" class="span-11 last">
		<h2>Find a PHP, Python, ASP.NET Developer</h2>
		<div class="quiet" style="font-size:1.25em;">  	
		    <strong>Since 2010</strong>, WebJobNow has been the trusted WEB job board with over <strong>1,270+ job posts</strong>. Get expert recruiting advice, <strong>email your job to our 600+</strong> opt-in developer list, and broadcast it on WebJobNow, Twitter, Facebook &amp; RSS.
		</div>

		<div id="intro-button-line" class="span-4">
			<a href="<?php echo URL; ?>postjob" class="button inline" title="Post a new job">Post Your Job</a> 
		</div>

	</div>
	<hr />
        
        


<div id="jobs-list" class="span-24 last">
      
     <ul class="jobs"> 
     <?php
     foreach ($this->alllist as $key=>$value)
         {
          echo '<li class="'.$value['type'].'"><h3><a href="'.URL.'jobs/view/'.$value['postid'].'">'.htmlspecialchars($value['title']).'</a><span> at '.htmlspecialchars($value['company']).'</span> <span class="date">'. date("Y-m-d", strtotime($value['date_create'])).'</span></h3>'.$value['country'].', '.htmlspecialchars($value['city']).'</li>';
          echo "\r\n";
         }
     ?>
      </ul>
      </div>
   </div>
   </div>

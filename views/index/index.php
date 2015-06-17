      <div id="content span-24">
        <div id="intro-box" class="span-24">
	<div id="intro" class="span-11 colborder">
		<h2>Find a C#, ASP.NET Developer</h2>
		<div class="quiet" style="font-size:1.25em;">  	
		    <strong>Since 2010</strong>, DotNetNow has been the trusted .Net job board with over <strong>1,270+ job posts</strong>. Get expert recruiting advice, <strong>email your job to our 600+</strong> opt-in developer list, and broadcast it on DotNetNow, Twitter, Facebook &amp; RSS.
		</div>

		<div id="intro-button-line" class="span-4">
			<a href="<?php echo URL; ?>postjob" class="button inline" title="Post a new job">Post Your Job</a> 
		</div>

	</div>

	<div id="needadev" class="span-11 last">
		

		<div class="quiet" style="font-size:1.25em;">
                    <a href="mailto:admin@dotnetnow.com" alt="Mail to: admin@dotnetnow.com"><img src="<?php echo URL; ?>public/images/ad_banner.jpg" alt="Place your Ad here, just $299 per month"></a>
		</div>s
	</div>

	<hr />


<div id="jobs-list" class="span-24 last">
      
     <ul class="jobs"> 
     <?php
     foreach ($this->alllist as $key=>$value)
         {
          echo '<li class="'.$value['type'].'"><h3 ><a href="'.URL.'jobs/view/'.$value['postid'].'">'.$value['title'].'</a><span> at '.$value['company'].'</span> <span class=date>'. date("Y-m-d", strtotime($value['date_create'])).'</span></h3>'.$value['country'].', '.$value['city'].'</li>';
         }
     ?>
      </ul>
      </div>
   </div>

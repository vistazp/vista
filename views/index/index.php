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
		<h2>.Net Contractors Available Now</h2>

		<div class="quiet" style="font-size:1.25em;">
			Our contractors are available to start working on your project for $25 and up per hour. We screen through thousands of candidates a year to find you skilled contractors in C#, ASP.NET, Android, HTML/CSS.
		</div> 
		<div id="intro-button-line" class="span-3">
			 <a href="<?php echo URL; ?>dotnet-contractors" class="button inline" title=".Net Contractors">Learn More</a> 
		</div>
	</div>

	<hr />


<div id="jobs-list" class="span-24 last">
  <ul class="jobs">
    
    <li id=job_6669 class='featured l2'>
      <h3><a href="http://jobs.rubynow.com/jobs/6669">RoR Full Stack - Join elite swat team led by Co-Founder and fo...</a> <span>at F50</span>
        <span class='date'>
          2015-05-23 </span>
      </h3>
      San Francisco</i>
    </li>
    <li id=job_6668 class='featured l2'>
      <h3><a href="http://jobs.rubynow.com/jobs/6668">Senior Rails Engineer</a> <span>at Booster</span>
        <span class='date'>
          2015-05-22 </span>
      </h3>
      Newton, MA</li>
    </li>
    <li id=job_6667 class='l1'>
      <h3><a href="http://jobs.rubynow.com/jobs/6667">Senior Web Developer </a> <span>at UNEP-WCMC </span>
        <span class='date'>
          2015-05-19 </span>
      </h3>
      United Kingdom, Cambridge</i>
    </li>
     </ul>
    
          
         
     <ul class="jobs"> 
     <?php
     foreach ($this->alllist as $key=>$value)
         {
          echo '<li class=l2><h3 ><a href="'.URL.'jobs/view/'.$value['postid'].'">'.$value['title'].'</a><span> at '.$value['company'].'</span> <span class=date>'.$value['date_create'].'</span></h3>'.$value['country'].', '.$value['city'].'</li>';
         }
     ?>
         </ul>
      </div>











      </div>
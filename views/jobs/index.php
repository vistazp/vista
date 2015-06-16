
      <div id="content span-24">
        <div id="job" class="span-24 last">
    
<div class="span-24 last">
  <h2 id="headline"><?php echo  $this->job[0]['title']; ?><span style="color:gray;">at</span> <a href="<?php echo  $this->job[0]['url']; ?>"><?php echo  $this->job[0]['company']; ?></a></h2>
  <h3 id="location"><?php echo  $this->job[0]['city']; ?>, <?php echo  $this->job[0]['country']; ?></h3>
</div>
<div id="info" class="span-18 colborder">
  <p id="description">

    <?php echo  $this->job[0]['jobdescription']; ?>
  </p>
  
  <br/><br/>
  
  <p>
    <strong>Type of position:</strong><?= ($this->job[0]['type_of_position']=='contractor') ? 'CONTRACTOR' : 'PERMANENT'; ?><br />
    <strong>Work hours:</strong><?= ($this->job[0]['work_hour']=='parttime') ? 'Part-time' : 'Full-time'; ?><br />
  </p>
</div>
<div id="sidebar" class="span-4 last">
  
  <div class="span-4 last">

    <h3>Share this job:</h3>
    <br/>
    <span class='st_email'></span>Email a Friend
    <hr/>
    <span class='st_twitter'></span>Tweet this job
    <hr/>
    <span class='st_facebook'></span>Share on Facebook
    <hr/>
    <span class='st_sharethis'></span>Other Options
    <hr/>
    <!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium"></g:plusone>

<!-- Place this tag after the last plusone tag -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

    <hr class="space"/>
    <hr/>
    <h3><span>Weekly Podcast</span></h3>
    <a href="http://jobs.rubynow.com/blog"><img alt="Rubynow_podcast_small" src="/images/rubynow_podcast_small.jpg?1423855819" width="100%" /></a>
    <div class="quiet" style="font-size:1.25em;">
      RubyNow's weekly podcast with one-on-one interviews, case-studies, and career development tips.
    </div>
    <br/>
    <hr/>

    <h3>Looking for a Job?</h3>
    <div class="quiet" style="font-size:1.25em;">
      Be the first to see all the latest jobs posted from New York, Chicago, California, and the world. Just enter your email address to receive notifications.
    </div>
    <div class="inline">
      <form accept-charset="UTF-8" action="/updates" class="inline" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="wm/58fRax8V97b8YQJGvBq08snS9b9xSg+D8EZgrNxs=" /></div>
      <input id="update_email" name="update[email]" size="30" type="text" />
      <input name="commit" type="submit" value="Subscribe" />
</form>    </div> 
    <hr class="space"/>
    <hr/>
    <h3>Is Your Resume Sabotaging You?</h3>
    <div class="quiet" style="font-size:1.25em;">
      If you haven't optimized your resume, companies may be spending less than six seconds looking at it. Learn how to <a href="http://jobs.rubynow.com/create-a-great-rails-resume">Craft The Perfect Rails Resume</a>.
    </div>
    <br/>
    <hr/>
  </div>
</div>
<hr class="space"/>

</div>

      <div id="content span-24">
        <div id="job" class="span-24 last">
    
<div class="span-24 last">
  <h2 id="headline"><?php echo  $this->job[0]['title']; ?><span style="color:gray;"> at</span> <a href="<?php echo  $this->job[0]['url']; ?>"><?php echo  $this->job[0]['company']; ?></a></h2>
  <h3 id="location"><?php echo  $this->job[0]['city']; ?>, <?php echo  $this->job[0]['country']; ?></h3>
</div>
<div id="info" class="span-18 colborder">
  <p id="description">
    <?php echo  nl2br(strip_tags($this->job[0]['jobdescription'], '<b> <a>')); ?>  
    
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
        <a href="mailto:admin@webjobnow@com" alt="Mail to: admin@webjobnow@com"><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package"></a>
    <hr class="space"/>
    <hr/>
        <a href="mailto:admin@webjobnow@com" alt="Mail to: admin@webjobnow@com"><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package"></a>    
    <br/>
    <hr class="space"/>
    <hr/>
        <a href="mailto:admin@webjobnow@com" alt="Mail to: admin@webjobnow@com"><img src="<?php echo URL; ?>public/images/ad_banner_right.jpg" alt="Ultra posting package"></a>    
    <br/>
 
  </div>
</div>
<hr class="space"/>

</div>
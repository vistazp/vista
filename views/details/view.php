<?php print_r($this->postPreview) ?>
<div id="steps" class="span-24 last">
  <form accept-charset="UTF-8" action="<?php echo URL; ?>payment/<?php echo  $this->postPreview[0]['postid']; ?>" class="edit_job" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input name="authenticity_token" type="hidden"  /></div>
    <!-- Step 3 -->
<div id="step-3" class="span-24 last">
  <div class="intro span-24 last">
    <h2>Step 3: Preview your ad</h2>
    <hr />
  </div>
  <div class="span-24 last">
    <h2 id="headline">jhgjhgjhgjhg 
      <span style="color:gray;">at</span> 
      <a href="http://saff.com">asf</a>
    </h2>
    <h3 id="location">dfsfsd, United States</h3>
  </div>
  <div id="info" class="span-18 borderwithoutcolor">
    <p id="description">
      <p>fasf</p>

    </p>
    <br />
    <h4>How to apply?</h4>
    <p id="instructions">
      <p>asfaf</p>

    </p>
    <p>
      <strong>Type of position:</strong> PERMANENT<br />
      <strong>Work hours:</strong> Full-time
    </p>
  </div>
  <!--
  <div id="sidbar" class="span-5 last" style="font-size: 1.5em; color: gray;"/>
    <em>Here we will show developers ways to share your job on Facebook, Twitter, Google+ and more.</em>
  </div>
 -->
   <hr class="space"/>
  <div class="step-nav span-24 last">
    <div class="prev-step column span-12">
      <a href="/post/jobs/6678/edit" class="button" id="back-to-step-2">&lt;&lt; Go back and edit</a>
    </div>
    <div class="next-step column span-12 last">
     
        <input class="button" id="job_submit" name="commit" type="submit" value="Payment &gt;&gt;" />
    </div>
  </div>


    <input id="job_step" name="job[step]" type="hidden" value="2" />
</form></div>

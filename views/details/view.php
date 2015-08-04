
<div id="steps" class="span-24 last">
  <form accept-charset="UTF-8" action="<?php echo URL; ?>payment/view/<?php echo  $this->postPreview[0]['postid']; ?>" class="edit_job" method="post"><div style="margin:0;padding:0;display:inline"></div>
    <!-- Step 3 -->
<div id="step-3" class="span-24 last">
  <div class="intro span-24 last">
    <h2>Step 3: Preview your ad</h2>
    <hr />
  </div>
  <div class="span-24 last">
    <h1 id="headline" >
      <?php echo  $this->postPreview[0]['title']; ?>
      <span style="color:gray;">at</span> 
      <a href="<?php echo  htmlspecialchars($this->postPreview[0]['url']); ?>" target="_blank" rel="nofollow" ><?php echo  htmlspecialchars($this->postPreview[0]['company']); ?></a>
    </h1>
    <h2 id="location"><?php echo  htmlspecialchars($this->postPreview[0]['city']); ?>, <?php echo  $this->postPreview[0]['country']; ?></h2>
  </div>
  <div id="info" class="span-18 borderwithoutcolor">
      <h4>Job description</h4>
    <p id="description">
        <p><?php $html= \michelf\markdown::defaultTransform(htmlspecialchars($this->postPreview[0]['jobdescription'])); echo $html; ?></p>
      

    </p>
    <br />
    <p>
      <strong>Type of position:</strong> <?= ($this->postPreview[0]['type_of_position']=='contractor') ? ' Contractor' : ' Permanent'; ?><br />
      <strong>Work hours:</strong> <?= ($this->postPreview[0]['work_hour']=='parttime') ? ' Part time' : ' Full time'; ?>
          
    </p>
  </div>
  <!--
  <div id="sidbar" class="span-5 last" style="font-size: 1.5em; color: gray;"/>
    <em>Here we will show developers ways to share your job on Facebook, Twitter, Google+ and more.</em>
  </div>
 -->
   <hr class="space"/>
  <div class="step-nav span-24 last">
    <div class="prev-step column span-12" <?php echo ($this->postPreview[0]['published']=='yes') ? 'style="visibility: hidden;"' : ''?>>
        <a href="<?php echo URL; ?>details/edit/<?php echo  $this->postPreview[0]['postid']; ?>" class="button" id="back-to-step-2">&lt;&lt; Go back and edit</a>
    </div>
    <div class="next-step column span-12 last">
     
        <input class="button" id="job_submit" name="commit" type="submit" value="Payment &gt;&gt;" />
    </div>
  </div>


    <input id="job_step" name="job[step]" type="hidden" value="2" />
</form></div>
</div>
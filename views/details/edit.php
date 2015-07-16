<div id="steps" class="span-24 last">

  <form accept-charset="UTF-8" action="<?php echo URL; ?>details/preview" class="form_step" id="form_step" method="post"><div style="margin:0;padding:0;display:inline"></div>
      <!-- Step 2 -->
<div id="step-2" class="span-24 last">

  <div class="intro span-24 last">
      <h2>Step 2: Enter the job Details</h2>
      
    <hr />
  </div>
  <!-- errors -->
    
  <div class="span-20 errorForsteps">

  </div>
  
  <div class="span-24 last">
    <input class="required" id="job_headline" name="headline" size="200" type="text" value="<?php echo htmlspecialchars($this->post[0]['title'],ENT_QUOTES) ?>" />
    
    <h3 id="location"><?php echo htmlspecialchars($this->post[0]['city']) ?>, <?php echo $this->post[0]['country'] ?></h3>


    <div class="span-24 borderwithoutcolor">
      

      <div class="span-9">
        <strong>Company: *</strong><br />
        <input class="required" id="job_company_name" name="company_name" size="33" type="text" value="<?= (isset($this->post[0]['company'])) ? htmlspecialchars($this->post[0]['company']) : ''; ?>" />
      </div>
      <div class="span-9 last">
        <strong>Company URL: *</strong><span class="hint">(start with http://)</span><br />
        <input class="required" id="job_url" name="url" size="33" type="text" value="<?= (isset($this->post[0]['url'])) ? htmlspecialchars($this->post[0]['url']) : 'http://'; ?>" />
      </div>

      <div class="span-21 last">
        <hr class="space"/>
        <strong>Enter the job description: *</strong>
        <textarea class="required markdown" cols="40" id="job_description" name="description" rows="20"><?= (isset($this->post[0]['jobdescription'])) ? htmlspecialchars($this->post[0]['jobdescription']) : ''; ?></textarea>
        
        <hr class="space"/>
        <div class="span-9">
          <strong>Type of Position:</strong><br />
          <input <?php if($this->post[0]['type_of_position']=='contractor') echo 'checked="checked"'; ?> id="job_length_of_employment_contractor" name="length_of_employment" type="radio" value="contractor" />
          <label for="job_length_of_employment">Contractor</label>
          <input <?php if($this->post[0]['type_of_position']=='permanent') echo 'checked="checked"'; ?> id="job_length_of_employment_permanent" name="length_of_employment" type="radio" value="permanent" />
          <label for="job_length_of_employment">Permanent</label><br />
        </div>
        <div class="span-9 last">
          <strong>Work hours:</strong><br />
          <input <?php if($this->post[0]['work_hour']=='fulltime') echo 'checked="checked"'; ?> id="job_hours_f" name="hours" type="radio" value="fulltime" />
          <label for="job_hours">Full Time</label>
          <input <?php if($this->post[0]['work_hour']=='parttime') echo 'checked="checked"'; ?> id="job_hours_p" name="hours" type="radio" value="parttime" />
          <label for="job_hours">Part Time</label>
        </div>
       
      </div>
    </div>
    <!--
    <div class="span-4 last" style="font-size: 1.5em; color: gray;">
       <em>Here we will show developers ways to share your job on Facebook, Twitter, Google+ and more.</em> 
    </div>
   -->
    <hr class="space"/>
    <div class="step-nav span-24 last">
      
        <div class="next-step span-12 last" style="float: right">
        <input class="button" id="job_submit" name="commit" type="submit" value="Next Step: Preview your ad &gt;&gt;" />
      </div>
    </div>
  </div>
</div>

    
    
</form></div>
<script language="javascript">$(document).ready(function(){$('.markdown').markItUp(myMarkdownSettings);});</script>
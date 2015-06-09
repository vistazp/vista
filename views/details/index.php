<div id="steps" class="span-24 last">

  <form accept-charset="UTF-8" action=<?php echo URL; ?>preview/preview class="form_step" id="form_step_2" method="post"><div style="margin:0;padding:0;display:inline"></div>
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
    <input class="required" id="job_headline" name="headline" size="50" type="text" value="<?php echo $this->post[0]['title'] ?>" />
    
      <h3 id="location"><?php echo $this->post[0]['city'] ?>, United States</h3>


    <div class="span-24 borderwithoutcolor">
      

      <div class="span-9">
        <strong>Company: *</strong><br />
        <input class="required" id="job_company_name" name="company_name" size="33" type="text" value="" />
      </div>
      <div class="span-9 last">
        <strong>Company URL: *</strong><span class="hint">(start with http://)</span><br />
        <input id="job_url" name="job[url]" size="33" type="text" value="http://" />
      </div>

      <div class="span-21 last">
        <hr class="space"/>
        <strong>Enter the job description: *</strong>
        <textarea class="required" cols="40" id="job_description" name="description" rows="20"></textarea>

        <hr class="space"/>
        <div class="span-9">
          <strong>Type of Position:</strong><br />
          <input id="job_length_of_employment_contractor" name="length_of_employment" type="radio" value="CONTRACTOR" />
          <label for="job_length_of_employment">Contractor</label>
          <input checked="checked" id="job_length_of_employment_permanent" name="length_of_employment" type="radio" value="PERMANENT" />
          <label for="job_length_of_employment">Permanent</label><br />
        </div>
        <div class="span-9 last">
          <strong>Work hours:</strong><br />
          <input checked="checked" id="job_hours_f" name="hours" type="radio" value="F" />
          <label for="job_hours">Full Time</label>
          <input id="job_hours_p" name="job[hours]" type="radio" value="P" />
          <label for="job_hours">Part Time</label>
        </div>


        <hr class="space"/>
        <strong>How to Apply? *</strong><span class="hint">(put your instructions here)</span>
        <textarea class="required" cols="40" id="job_instructions" name="job[instructions]" rows="20"></textarea>

      </div>
    </div>
    <!--
    <div class="span-4 last" style="font-size: 1.5em; color: gray;">
       <em>Here we will show developers ways to share your job on Facebook, Twitter, Google+ and more.</em> 
    </div>
   -->
    <hr class="space"/>
    <div class="step-nav span-24 last">
      <input id="called_from_step" name="called_from_step" type="hidden" value="2" />
      <div class="prev-step span-12">
        <a href="#step-1-fields-section" class="button" id="back-to-step-1">&lt;&lt; Go back</a>
        &nbsp;
      </div>
      <div class="next-step span-12 last">
        <input class="button" id="job_submit" name="commit" type="submit" value="Next Step: Preview your ad &gt;&gt;" />
      </div>
    </div>
  </div>
</div>

    
    <input id="job_step" name="job[step]" type="hidden" value="2" />
</form></div>

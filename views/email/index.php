<div id="content" class="span-24">
        <h2>Notifications Settings for New Jobs</h2>
<p>Use the form to set when you wish to receive email notifications for new jobs have been posted to the board.</p>

<div style="color: red;"><?= (isset($this->ValError)) ? $this->ValError : ''; ?></div><br/>
<div style="color: blue;"><?= (isset($this->ValError2)) ? $this->ValError2 : ''; ?></div><br/>
<form method='post' action="<?php echo URL; ?>email/update">
<h3><label for="email">Step 1:</label> Enter your email address : <input type="text" name="email" value="<?= (isset($_GET['email'])) ? $_GET['email'] : ''; ?>" size="60"><h3>

<h3><label for="email">Step 2:</label> Set your preference for updates on new jobs</h3>

  <h3><input id="format_0" name="notify" type="radio" value="0" /> One email per post</h3>
  <h3><input checked="checked" id="format_1" name="notify" type="radio" value="1" /> Daily digest</h3>
  <h3><input id="format_2" name="notify" type="radio" value="2" /> Weekly digest</h3>
  <h3><input id="format_3" name="notify" type="radio" value="3" /> Pause emails for 3 months</h3>

<input class="button inline" name="email_preference" type="submit" value="Change Email Frequency" />
</form>
</div>
      <div id="content" class="span-24">
        If you don't have an account, then go to the <a href="<?php echo URL; ?>signup">create account</a> page.<br/>
If you have lost your password, just fill out your email address in the form below and a new password will be sent to you.<br/>
<form accept-charset="UTF-8" action="<?php echo URL; ?>signup/password_reset" method="post"><div style="margin:0;padding:0;display:inline"></div>	
	<br/>
    <h3>Password reset</h3>
    <div style="color: red;"><?= (isset($this->ValError)) ? $this->ValError : ''; ?></div><br/>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" id="email" size="30" value=""/><br/>

    <br/>
    <input type="submit" name="login" value="Reset" class="button inline" />


</form>
</div>
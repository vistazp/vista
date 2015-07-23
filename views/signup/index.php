
<div id="content" class="span-24">
    <h1>Signup</h1>        
After the account creation, you will be able to post jobs.<br/>
If you already have an account and have lost your password, go to the <a href="<?php echo URL; ?>signup/reset">reset account</a> page.<br/><br/>


<form accept-charset="UTF-8" action="<?php echo URL; ?>signup/validation" class="new_user" id="new_user" method="post">
    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="tRSImprGfZCjqCalIzncleieM7kvwBR2XskOgyr8qnw=" /></div>
    <div title="Account signup" id="signupform" class="form"> 
        
        <div style="color: red;"><?= (isset($this->ValError)) ? $this->ValError : ''; ?></div><br/>
        <label for="txtName">Name:</label><br/>
        <input id="txtName" name="name" size="30" type="text" /><br/>

        <label for="txtEmail">Email:</label><br/>
        <input id="txtEmail" name="email" size="30" type="text" /><br/>

        <label for="txtPassword">Choose password:</label><br/>
        <input id="txtPassword" name="password" size="30" type="password" /><br/>

        <label for="txtPasswordConfirm">Confirm password:</label><br/>
        <input id="txtPasswordConfirm" name="passwordConfirm" size="30" type="password" /><br/>

        <label for="chkReadTerms">
            <input name="chkReadTerms" type="hidden" value="0" /><input id="chkReadTerms" name="chkReadTerms" type="checkbox" value="1" />I agree to the <a href="<?php echo URL; ?>terms">Terms
                for Use</a> and <a href="<?php echo URL; ?>privacy">Privacy Policy</a>
        </label><br /><br />

        <input type="submit" name="signup" value="Create your account" class="button inline" />
    </div>

</form>
</div>
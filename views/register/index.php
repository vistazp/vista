<h1>Register a new user</h1>



<form accept-charset="UTF-8" action="<?php echo URL; ?>register/validate" class="new_user" id="new_user" method="post">
    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="tRSImprGfZCjqCalIzncleieM7kvwBR2XskOgyr8qnw=" /></div>
    <div title="Account signup" id="signupform" class="form"> 
        <br/>
        <h3>Signup</h3>
        <br/>

        <label for="txtUsername">Name:</label><br/>
        <input id="txtUsername" name="txtUsername" size="30" type="text" 
               onblur="validate(this.value, this.id)" 

               value="<?php echo $_SESSION['values']['txtUsername'] ?>" />
        <span id="txtUsernameFailed"
              class="<?php echo $_SESSION['errors']['txtUsername'] ?>">
            This username is in use, or empty username field.
        </span>
        <br/>

   




        <label for="txtEmail">Email:</label><br/>
        <input id="txtEmail" name="txtEmail" size="30" type="text" /><br/>

        <label for="txtPassword">Choose password:</label><br/>
        <input id="txtPassword" name="txtPassword" size="30" type="password" /><br/>

        <label for="txtPasswordConfirm">Confirm password:</label><br/>
        <input id="txtPasswordConfirm" name="txtPasswordConfirm" size="30" type="password" /><br/>

        <label for="chkReadTerms">
            <input name="chkReadTerms" type="hidden" value="0" /><input id="chkReadTerms" name="chkReadTerms" type="checkbox" value="1" />I agree to the <a href="<?php echo URL; ?>/terms">Terms
                for Use</a> and <a href="<?php echo URL; ?>/privacy">Privacy Policy</a>
        </label><br /><br />

        <input type="submit" name="signup" value="Create your account" class="button inline" />
    </div>

</form>
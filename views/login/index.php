

  <div id="content" class="span-24">
    <h1>Login page</h1>
        If you don't have an account, then go to the <a href="<?php echo URL; ?>signup">create account</a> page.<br/>
If you already have an account and have lost your password, go to the <a href="<?php echo URL; ?>signup/reset">reset account</a> page.<br/><br/>

<form accept-charset="UTF-8" action="login/run" method="post">
    <div style="margin:0;padding:0;display:inline">
        <input name="utf8" type="hidden" value="&#x2713;" />
        <input name="authenticity_token" type="hidden" value="XsTD3UQWKWtrQ3wMTCY0wOneAfWepo+Ej0v9dGo8W/g=" />
    </div>

<div title="Account login" id="loginform" class="form">
    <h3>Please login</h3>
    

    <label for="user_login">Email:</label><br/>
    <input type="text" name="email" id="user_login" size="30" value=""/><br/>

    <label for="user_password">Password:</label><br/>
    <input type="password" name="password" id="user_password" size="30"/>

    <br/>
    <input type="submit" name="submit_login" value="Sign in" class="button inline" />

</div>

</form>
</div>
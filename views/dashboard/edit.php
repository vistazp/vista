<div id="content" class="span-24">
        
<h2>Update account information | (<?php echo $_SESSION['userEmail'] ?>)</h2>


<form accept-charset="UTF-8" action="<?php echo URL; ?>dashboard/subVal/<?php echo  $this->user[0]['id']; ?>" class="new_user" id="new_user" method="post">
    <div title="Account signup" id="signupform" class="form"> 
        <br/>
        <div style="color: red;"><?= (isset($this->ValError)) ? $this->ValError : ''; ?></div><br/>

        <br/>
        <label for="txtName">Name:</label><br/>
        <input id="txtName" name="name" size="30" type="text" value="<?php echo  $this->user[0]['name']; ?>"/><br/>

        <label for="txtPassword">Password:</label><br/>
        <input id="txtPassword" name="password" size="30" type="password" /><br/>

        <label for="txtPasswordConfirm">Confirm password:</label><br/>
        <input id="txtPasswordConfirm" name="passwordConfirm" size="30" type="password" /><br/>

        <br />

        <input type="submit" name="signup" value="Update" class="button inline" />
    </div>

</form>
</div>
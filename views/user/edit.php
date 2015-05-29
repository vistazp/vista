<h1>User edit</h1>



<form method="post" action="<?php echo URL; ?>user/editSave/<?php echo  $this->user['id']; ?>">
    <label>Name</label><br/>
    <input type="text" name="name" size="30" value="<?php echo  $this->user['name']; ?>"/><br />
    <label>Email</label><br/>
    <input type="text" name="email" size="30" value="<?php echo  $this->user['email']; ?>"/><br />
    <label>Password</label><br/>
    <input type="text" size="30" name="password"  /><br />
    <label>Role</label>
    <select name="role">
        <option value="default" <?php if($this->user['role']=='default') echo 'selected'; ?> >default</option>
        <option value="admin" <?php if($this->user['role']=='admin') echo 'selected'; ?> >admin</option>
        <option value="owner" <?php if($this->user['role']=='owner') echo 'selected'; ?> >owner</option>
        
    </select><br />
    <label>&nbsp;</label><input type="submit" />
</form>
    
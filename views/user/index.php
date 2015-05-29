<h1>User</h1>
<h2>Add new user</h2>
<form method="post" action="<?php echo URL; ?>user/create">
    <label>Name</label><br/>
    <input size="30" type="text" name="name" /><br />
    <label>Email</label><br/>
    <input size="30" type="text" name="email" /><br />
    <label>Password</label><br/>
    <input size="30" type="text" name="password" /><br />
    <label>Role</label>
    <select name="role">
        <option value="default">default</option>
        <option value="admin">admin</option>
    </select><br />
    <label>&nbsp;</label><input type="submit" />
</form>
    
    
<hr />


<table>
    
<?php
    foreach ($this->userList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '<td>'.$value['name'].'</td>';
        echo '<td>'.$value['role'].'</td>';
        echo '<td><a href="'.URL.'user/delete/'.$value['id'].'">Delete</a>';
        echo '<td><a href="'.URL.'user/edit/'.$value['id'].'">Edit</a>';
        echo '</tr>';
    }

//print_r($this->userList);
?>
</table>
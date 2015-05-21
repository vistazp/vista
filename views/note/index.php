<h1>Note</h1>
<h2>Add new note</h2>
<form method="post" action="<?php echo URL; ?>note/create">
    <label>Title</label><input type="text" name="title" /><br />
    <label>Content</label><textarea type="text" name="content"></textarea><br />
    <label>&nbsp;</label><input type="submit" />
</form>
    
    
<hr />


<table>
    
<?php
    foreach ($this->noteList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['title'].'</td>';
        echo '<td>'.$value['date_added'].'</td>';
        echo '<td><a class ="delete" href="'.URL.'note/delete/'.$value['noteid'].'">Delete</a>';
        echo '<td><a href="'.URL.'note/edit/'.$value['noteid'].'">Edit</a>';
        echo '</tr>';
    }

//print_r($this->userList);
?>
</table>

<script>
$(function(){
    $('.delete').click(function(e){
       // e.preventDefault();
        
        var c = confirm("Are you Youtubers?");
        if (c == false) return false;
        
    });
});
</script>

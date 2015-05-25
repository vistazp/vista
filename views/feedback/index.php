<h1>Feedback list</h1>


    
<hr />


<table>
    
<?php
    foreach ($this->feedList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['feedid'].'</td>';
        echo '<td>'.$value['name'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '<td>'.$value['reason'].'</td>';
        
        echo '<td><a class ="delete" href="'.URL.'feedback/delete/'.$value['feedid'].'">Delete</a>';
        echo '<td><a href="'.URL.'feedback/view/'.$value['feedid'].'">View</a>';
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

<h1>Subscription list</h1>


    
<hr />


<table>
            <th>ID</th>
            <th>Email</th>
            <th>Date</th>
            
<?php
    foreach ($this->subscriptionList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['subid'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '<td>'.$value['datesub'].'</td>';
        echo '<td>'.$value['notify'].'</td>';
        echo '<td><a class ="delete" href="'.URL.'subscription/delete/'.$value['subid'].'">Delete</a>';
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

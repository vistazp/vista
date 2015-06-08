<div id="content span-24">
    <div id='info'>
        <p>
        <h2>Job Post Dashboard</h2> 
        Welcome <?php echo $_SESSION['userName'] ?> (<?php echo $_SESSION['userEmail'] ?>) | <a href="<?php echo URL; ?>dashboard/edit">Update Account Details</a> <br/>
        </p>

        <p>
        <ul>
            <li>All posts are approved manually to ensure a quality experience for our members. We try to optimize for a best time of day to publish posts to get the maximum traffic for you and this is typically within 24 hours of submission.</li>
            <li>For Premium posts we'll reach out for a time to review your post. Please let us know if you want the post sent out immediately.</li>
            <li>Jobs are active for 30 days. After that they are no longer listed on the site.</li>
            <li>If you have any questions, please call +44 20 7832 4901  or email at <a href="mailto:admin@dotnetnow.com">admin@dotnetnow.com</a></li>
        </ul>
        </p>

        <br/>
       
        
        <table cellspacing="5">
        
            <th>ID</th>
            <th>Preview</th>
            <th>Posting Type</th>
            <th>Paid</th>
            <th>Published</th>
            <th>Created</th>
            <th colspan='2'></th>

        <?php
            foreach ($this->userPost as $key=>$value)
            {
                echo '<tr>';
                echo '<td>'.$value['postid'].'</td>';
                echo '<td><a href="'.URL.'jobs/view/'.$value['postid'].'">'.$value['title'].'</a>';
                echo '<td>'.$value['type'].'</td>';
                echo '<td>'.$value['paid'].'</td>';
                echo '<td>'.$value['published'].'</td>';
                echo '<td>'.$value['date_create'].'</td>';
                echo '<td><a href="'.URL.'jobs/edit/'.$value['postid'].'">edit / pay</a></td>';
                echo '<td><a class ="delete" href="'.URL.'dashboard/deletePost/'.$value['postid'].'" >delete</a></td>';
                echo '</tr>';
            }

        //print_r($this->userList);
        ?>
        </table>
        
        
        
        To create a new job post : <a href="<?php echo URL; ?>postjob" title="Post a new job">Post a Job</a>

    </div>

</div>

<script>
$(function(){
    $('.delete').click(function(e){
               
        var c = confirm("Are you Youtubers?");
        if (c == false) return false;
        
    });
});
</script>



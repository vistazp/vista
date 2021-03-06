<div id="content" class="span-24">
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
            <li>If you have any questions, please call +38 093 377 4748 or email at <a href="mailto:admin@webjobnow.com">admin@webjobnow.com</a></li>
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
                echo '<td><a href="'.URL.'details/view/'.$value['postid'].'">'.substr(htmlspecialchars($value['title'],ENT_QUOTES),0,38).'</a>';
                echo '<td>'.$value['type'].'</td>';
                echo '<td>'.$value['paid'].'</td>';
                echo '<td>'.$value['published'].'</td>';
                echo '<td>'.$value['date_create'].'</td>';
                echo ($value['published']=='no') ? '<td><a href="'.URL.'details/edit/'.$value['postid'].'">edit / pay</a></td>' : '<td><a href="'.URL.'details/edit/'.$value['postid'].'">published</a></td>'; 
               // echo '<td><a href="'.URL.'details/edit/'.$value['postid'].'">edit / pay</a></td>';
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
               
        var c = confirm("Are you sure?");
        if (c == false) return false;
        
    });
});
</script>



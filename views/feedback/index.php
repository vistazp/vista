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

 <form accept-charset="UTF-8" action="<?php echo URL; ?>feedback/generate" class="new_job" id="new_job" method="post"><div style="margin:0;padding:0;display:inline">
<div class="next-step last">
  <input class="button" id="next-step-job-details" name="commit" type="submit" value="Generate Sitemap &gt;&gt;" />
 </div>
  </form>
<br/>
<br/>
<h2>Paid posts</h2>
<table>
            <th>Post ID</th>
            <th>User ID</th>
            <th>Title</th>
            <th>Paid</th>
            <th>Published</th>
            <th>Created</th>
            <th>Published</th>

<?php
    foreach ($this->payedList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['postid'].'</td>';
        echo '<td>'.$value['userid'].'</td>';
        echo '<td><a href="'.URL.'jobs/view/'.$value['postid'].'">'.$value['title'].'</a></td>';
        echo '<td>'.$value['paid'].'</td>';
        echo '<td><a href="'.URL.'feedback/publish/'.$value['postid'].'">'.$value['published'].'</a></td>';
        echo '<td>'.$value['date_create'].'</td>';
        echo '<td>'.$value['date_pablish'].'</td>';
        
//        echo '<td><a class ="delete" href="'.URL.'feedback/delete/'.$value['feedid'].'">Delete</a>';
//        echo '<td><a href="'.URL.'feedback/view/'.$value['feedid'].'">View</a>';
        echo '</tr>';
    }

//print_r($this->userList);
?>
</table>
<h2>Subscriber list</h2>
<table>
            <th>ID</th>
            <th>Email</th>
            <th>Date</th>
            
<?php
    foreach ($this->subList as $key=>$value)
    {
        echo '<tr>';
        echo '<td>'.$value['subid'].'</td>';
        echo '<td>'.$value['email'].'</td>';
        echo '<td>'.$value['datesub'].'</td>';
        echo '<td>'.$value['notify'].'</td>';
        echo '<td><a class ="delete" href="'.URL.'feedback/deleteSub/'.$value['subid'].'">Delete</a>';
        echo '</tr>';
    }

//print_r($this->userList);
?>
</table>

<div class="next-step last">
  
  
<form accept-charset="UTF-8" action="<?php echo URL; ?>feedback/sendmail2" class="new_job" id="new_job" method="post"><div style="margin:0;padding:0;display:inline">
  <input class="button" id="next-step-job-details" name="commit" type="submit" value="Daily digest       &gt;&gt; " />
 </form>
<form accept-charset="UTF-8" action="<?php echo URL; ?>feedback/sendmail3" class="new_job" id="new_job" method="post"><div style="margin:0;padding:0;display:inline">
  <input class="button" id="next-step-job-details" name="commit" type="submit" value="Weekly digest   &gt;&gt; " />
 </form>
  </div>
<script>
$(function(){
    $('.delete').click(function(e){
       // e.preventDefault();
        
        var c = confirm("Are you Youtubers?");
        if (c == false) return false;
        
    });
});
</script>

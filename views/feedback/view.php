<h1>View feedback</h1>



<form method="post" action="<?php echo URL; ?>feedback/delete/<?php echo  $this->feedback[0]['feedid']; ?>">
    <label>Name</label><div type="text" name="name"> <?php echo  htmlspecialchars($this->feedback[0]['name']); ?></div><br />
    <label>Email</label><div type="text" name="email"> <?php echo  htmlspecialchars($this->feedback[0]['email']); ?></div><br />
    <label>Date</label><div type="text" name="datefeed"> <?php echo  htmlspecialchars($this->feedback[0]['datefeed']); ?></div><br />
    <label>Reason</label><div type="text" name="reason"> <?php echo  $this->feedback[0]['reason']; ?></div><br />
    <label>Comment</label><div type="text" name="comment"><?php echo  htmlspecialchars($this->feedback[0]['comment']); ?></div><br />
    <input class="button-green inline" name="commit" type="submit" value="Delete">    
</form>
    
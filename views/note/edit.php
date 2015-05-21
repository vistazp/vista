<h1>Edit note</h1>



<form method="post" action="<?php echo URL; ?>note/editSave/<?php echo  $this->note[0]['noteid']; ?>">
    <label>Title</label><input type="text" name="title" value="<?php echo  $this->note[0]['title']; ?>"><br />
    <label>Content</label><textarea type="text" name="content"><?php echo  $this->note[0]['content']; ?></textarea><br />
    <label>&nbsp;</label><input type="submit" />
</form>
    